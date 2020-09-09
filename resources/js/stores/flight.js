import { createStore } from 'pinia'

let state = () => ({
    session: null,
    isFresh: true,
    tripType: 'roundtrip',
    stop: null,
    from: null,
    to: null,
    departureDate: '',
    from2: null,
    to2: null,
    departureDate2: '',
    from3: null,
    to3: null,
    departureDate3: '',
    returnDate: '',
    isReturnDate: true,
    adults: 1,
    children: 0,
    flightSearchRows: 2,
    multiRoutes: [],
    errors: [],
    response: {},
    fetchingMore: false,
    component: 'FlightSearchLoader',
    sort: 'Cheapest',
    selectedAirLines: [],
    selectedFlight: {},
    correct_traveler_info: false,
    currentConfirmedFlight: {},
    travelersErrors: {},
    selectedFlightPageComponent: 'ConfirmPriceLoader',
    outboundTimeFrom: '',
    outboundTimeTo: '',
    returnTimeFrom: '',
    returnTimeTo: '',
    flyoutSame: '',
})

export const useFlightStore = createStore({
    id: 'flight',

    state,

    getters: {
        tripType: state => tripTypes[state.tripType],
        stop: state => stops[state.stop],
        totalTravelers: state => state.adults + state.children
    },

    actions: {
        setSession(session) {
            console.log('setSession')
            this.state.session = session
        },

        setInitialState(request) {
            console.log('setInitialState')

            this.patch({
                session: request.session,
                adults: parseInt(request.adults),
                children: parseInt(request.children),
                stop: request.stop == 'null' ? null : request.stop,
                tripType: request.tripType,
                returnDate: request.returnDate == 'null' ? null : request.returnDate,
                flightSearchRows: parseInt(request.flightSearchRows),

                from: {
                    name: request.fromName,
                    iata: request.fromIata,
                },
                to: {
                    name: request.toName,
                    iata: request.toIata,
                },
                departureDate: request.departureDate,

                from2: {
                    name: request.fromName2,
                    iata: request.fromIata2,
                },
                to2: {
                    name: request.toName2,
                    iata: request.toIata2,
                },
                departureDate2: request.departureDate2,

                from3: {
                    name: request.fromName3,
                    iata: request.fromIata3,
                },
                to3: {
                    name: request.toName3,
                    iata: request.toIata3,
                },
                departureDate3: request.departureDate3,
            })
        },

        setSummary(data) {
            console.log('setSummary')
            console.log(data)

            this.patch({
                adults: parseInt(data.adults),
                children: parseInt(data.children),
                departureDate: data.departureDate,
                from: {
                    name: data.from.name,
                    iata: data.from.iata,
                },
                to: {
                    name: data.to.name,
                    iata: data.to.iata,
                },
                returnDate: data.returnDate == 'null' ? null : data.returnDate,
                stop: data.stop == 'null' ? null : data.stop,
                tripType: data.tripType,
                selectedFlight: data.selectedFlight,
                response: data.response,
            })
        },

        tripTypes() {
            return tripTypes
        },

        stops() {
            return stops
        },

        addFlightSearchRow() {
            if (this.state.flightSearchRows < 3) {
                this.state.flightSearchRows++
            }
        },

        search() {
            if (!this.validate()) return

            // const {isReturnDate, flightSearchRows, errors, ...params} = this.state

            const params = {
                session: this.state.session,
                adults: this.state.adults,
                children: this.state.children,
                returnDate: this.state.returnDate,
                stop: this.state.stop,
                tripType: this.state.tripType,
                flightSearchRows: this.state.flightSearchRows,

                fromIata: this.state.from.iata,
                fromName: this.state.from.name,
                toIata: this.state.to.iata,
                toName: this.state.to.name,
                departureDate: this.state.departureDate,

                fromIata2: this.state.from2 ? this.state.from2.iata : null,
                fromName2: this.state.from2 ? this.state.from2.name : null,
                toIata2: this.state.to2 ? this.state.to2.iata : null,
                toName2: this.state.to2 ? this.state.to2.name : null,
                departureDate2: this.state.departureDate2,

                fromIata3: this.state.from3 ? this.state.from3.iata : null,
                fromName3: this.state.from3 ? this.state.from3.name : null,
                toIata3: this.state.to3 ? this.state.to3.iata : null,
                toName3: this.state.to3 ? this.state.to3.name : null,
                departureDate3: this.state.departureDate3,
            }

            const queryString = Object.keys(params).map(key => key + '=' + params[key]).join('&')

            console.log(queryString)
            history.replaceState(null, null, '?' + queryString)
            window.location = '/flights?' + queryString
        },

        validate() {
            this.state.errors = []

            if (!this.state.from)
                this.state.errors.push('Please choose from destination.')
            if (!this.state.to)
                this.state.errors.push('Please choose to destination.')
            if (!this.state.departureDate)
                this.state.errors.push('Please choose departure date.')
            if (!this.state.returnDate && this.state.tripType == 'roundtrip')
                this.state.errors.push('Please choose return date.')
            if (this.state.from && this.state.to && this.state.from.iata == this.state.to.iata)
                this.state.errors.push('Please choose different destinations.')

            if (this.state.errors.length)
                return false

            return true
        },

        attributes(page = false) {
            return {
                session: this.state.session,
                isFresh: this.state.isFresh,
                from: this.state.from.iata,
                to: this.state.to.iata,
                departureDate: this.state.departureDate,

                from2: this.state.from2.iata,
                to2: this.state.to2.iata,
                departureDate2: this.state.departureDate2,

                from3: this.state.from3.iata,
                to3: this.state.to3.iata,
                departureDate3: this.state.departureDate3,

                tripType: this.state.tripType,
                adults: this.state.adults,
                children: this.state.children,
                returnDate: this.state.returnDate,
                stop: this.state.stop,
                page: page ? this.state.response.next_page : 1,
                airLines: this.state.selectedAirLines,
                sort: this.state.sort,
                outboundTimeFrom: this.state.outboundTimeFrom,
                outboundTimeTo: this.state.outboundTimeTo,
                returnTimeFrom: this.state.returnTimeFrom,
                returnTimeTo: this.state.returnTimeTo,
                flyoutSame: this.state.flyoutSame,
            }
        },

        findFlights() {
            axios.post('flights', this.attributes())
                .then(response => {
                    console.log(response)

                    this.state.response = response
                    this.state.isFresh = false

                    if (response.total) {
                        this.state.component = 'FlightResults'
                    }
                    else {
                        this.state.component = 'NoFlights'
                    }
                })
                .catch(error => {
                })
        },

        filter() {
            axios.post('flights', this.attributes())
                .then(response => {
                    console.log(response)
                    this.state.response = response
                })
                .catch(error => {
                    // commit('STATE', {key: 'fetchingMore', val: false})
                })
        },

        fetchMore() {
            this.state.fetchingMore = true

            axios.post('flights', this.attributes(true))
                .then(response => {
                    console.log(response)
                    this.state.response.data = this.state.response.data.concat(response.data)
                    this.state.response.next_page = response.next_page
                    this.state.fetchingMore = false
                })
                .catch(error => {
                    // commit('STATE', {key: 'fetchingMore', val: false})
                })
        },

        confirmPrice() {
            axios.post('price-confirm', {
                flight: this.state.selectedFlight
            })
                .then(response => {
                    console.log(response)

                    if (response.message) {
                        // commit('STATE', {key: 'processing', val: false})
                        // dispatch('flash/danger', response.message, { root: true })
                        // return
                    }

                    this.state.currentConfirmedFlight = response
                    this.state.selectedFlightPageComponent = 'Travelers'

                    // commit('STATE', {key: 'confirm', val: response})
                    // commit('flight/STATE', {key: 'page', val: 'payment'}, { root: true })
                })
                .catch(error => {

                })
        }
    }
})

let tripTypes = {
    roundtrip: 'Roundtrip',
    oneway: 'One Way',
    multicity: 'Multi City',
}

let stops = {
    0: 'Non-stop flights only',
    1: '1 Stop',
    2: '2 Stops',
}
