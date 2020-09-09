@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Dashboard
    </div>
@endsection

@section('content')
    <div class="flex -mx-2 mt-4">
        <div class="w-1/3 px-2">
            <div class="card px-4 py-6">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" class="fill-current text-blue-400"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm1 14H8c-.55 0-1-.45-1-1s.45-1 1-1h5c.55 0 1 .45 1 1s-.45 1-1 1zm3-4H8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1zm0-4H8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1z"/></svg>

                    <div class="ml-6">
                        <h3 class="font-bold text-gray-600">Bookings</h3>
                        <h2 class="text-4xl mt-2">{{ $bookings }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/3 px-2">
            <div class="card px-4 py-6">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" class="fill-current text-blue-400"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm1 14H8c-.55 0-1-.45-1-1s.45-1 1-1h5c.55 0 1 .45 1 1s-.45 1-1 1zm3-4H8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1zm0-4H8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1z"/></svg>

                    <div class="ml-6">
                        <h3 class="font-bold text-gray-600">Customers</h3>
                        <h2 class="text-4xl mt-2">{{ $customers }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/3 px-2">
            <div class="card px-4 py-6">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" class="fill-current text-blue-400"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm1 14H8c-.55 0-1-.45-1-1s.45-1 1-1h5c.55 0 1 .45 1 1s-.45 1-1 1zm3-4H8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1zm0-4H8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1z"/></svg>

                    <div class="ml-6">
                        <h3 class="font-bold text-gray-600">Organizations</h3>
                        <h2 class="text-4xl mt-2">{{ $organizations }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h3 class="text-sm text-gray-700 uppercase font-bold tracking-widest pt-12 pb-4">Bookings</h3>

    <v-index name="booking"
             uri="admin/bookings"
             title="Booking"
             search-column="amadeus_id"
             no-actions
             no-filters
             no-create
             no-edit
             no-delete
             no-select
    ></v-index>
@endsection
