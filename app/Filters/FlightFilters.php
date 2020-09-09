<?php

namespace App\Filters;

use Carbon\Carbon;

class FlightFilters extends Filters
{
    protected $outboundTimeFrom;

    protected $returnTimeFrom;

    /**
     * Registered filters to operate upon.
     *
     * @var array
     */
    protected $filters = [
        'airLines',
        'outboundTimeFrom', 'outboundTimeTo', 'returnTimeFrom', 'returnTimeTo',
        'sort',
    ];

    /**
     * {@inheritdoc}
     */
    protected function airLines($airLines)
    {
        $this->collection = $this->collection->filter(function ($item) use ($airLines) {
            return in_array($item['itineraries'][0]['segments'][0]['carrierCode'], $airLines);
        });
    }

    /**
     * {@inheritdoc}
     */
    protected function outboundTimeFrom($time)
    {
        $this->outboundTimeFrom = $time;
    }

    /**
     * {@inheritdoc}
     */
    protected function outboundTimeTo($to)
    {
        if ($from = $this->outboundTimeFrom) {
            $this->collection = $this->collection->filter(function ($item) use ($from, $to) {
                $hour = date('H', strtotime($item['itineraries'][0]['segments'][0]['departure']['at']));
                $minutes = date('i', strtotime($item['itineraries'][0]['segments'][0]['departure']['at']));

                return $from <= $minutes.$hour && $to >= $minutes.$hour;
            });
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function returnTimeFrom($time)
    {
        $this->returnTimeFrom = $time;
    }

    /**
     * {@inheritdoc}
     */
    protected function returnTimeTo($to)
    {
        if ($from = $this->returnTimeFrom) {
            $this->collection = $this->collection->filter(function ($item) use ($from, $to) {
                $hour = date('H', strtotime($item['itineraries'][1]['segments'][0]['departure']['at']));
                $minutes = date('i', strtotime($item['itineraries'][1]['segments'][0]['departure']['at']));

                return $from <= $minutes.$hour && $to >= $minutes.$hour;
            });
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function sort($sort)
    {
        $method = 'sortBy' . $sort;

        $this->$method();
    }

    /**
     * {@inheritdoc}
     */
    protected function sortByCheapest()
    {
        $first = $this->collection->first();

        if (isset($first['itineraries'][1])) {
            $this->collection = $this->collection->sortBy(function($item) {
                return [
                    $item['price']['grandTotal'],
                    $item['itineraries'][0]['segments'][0]['departure']['at'],
                    $item['itineraries'][1]['segments'][0]['departure']['at'],
                ];
            })->values();
        }
        else {
            $this->collection = $this->collection->sortBy(function($item) {
                return [
                    $item['price']['grandTotal'],
                    $item['itineraries'][0]['segments'][0]['departure']['at']
                ];
            })->values();
        }










        // $collection = $this->collection->forPage(2, 2)->values();
        // $collection = $this->collection;

        // $grouped = $collection->groupBy(function ($item) {
        //     return $item['price']['grandTotal'];
        // });

        // $grouped->transform(function ($item) {
        //     return $item->sortBy(function ($subItem) {
        //         return $subItem['itineraries'][0]['segments'][0]['departure']['at'];
        //     })->values();
        // });

        // $sorting = $grouped->sortBy(function ($item, $key) {
        //     return $key;
        // });

        // $now = $sorting->values()->all();

        // $data = [];
        // foreach ($now as $value) {
        //     foreach ($value as $i) {
        //         $data[] = $i;
        //     }
        // }

        // $this->collection = collect($data);
    }

    /**
     * {@inheritdoc}
     */
    protected function sortByBest()
    {
        $this->collection = $this->collection->sortBy(function ($item) {
            return [
                $item['price']['total'],
                $item['itineraries'][0]['duration']
            ];
        })->values();
    }

    /**
     * {@inheritdoc}
     */
    protected function sortByFastest()
    {
        $this->collection = $this->collection->sortBy(function ($item) {
            return $item['itineraries'][0]['duration'];
        });
    }

    /**
     * {@inheritdoc}
     */
    protected function sortByOutboundDeparture()
    {
        $this->collection = $this->collection->sortBy(function ($item) {
            return $item['itineraries'][0]['segments'][0]['departure']['at'];
        });
    }

    /**
     * {@inheritdoc}
     */
    protected function sortByOutboundArrival()
    {
        $this->collection = $this->collection->sortBy(function ($item) {
            return end($item['itineraries'][0]['segments'])['arrival']['at'];
        });
    }

    /**
     * {@inheritdoc}
     */
    protected function sortByReturnDeparture()
    {
        $this->collection = $this->collection->sortBy(function ($item) {
            return $item['itineraries'][1]['segments'][0]['departure']['at'];
        });
    }

    /**
     * {@inheritdoc}
     */
    protected function sortByReturnArrival()
    {
        $this->collection = $this->collection->sortBy(function ($item) {
            return end($item['itineraries'][1]['segments'])['arrival']['at'];
        });
    }
}
