import { createStore } from 'pinia'

let state = () => ({
    gender: 'male',
    firstName: '',
    lastName: '',
    email: '',
    birthDate: '',
    passport: '',
    passportExpire: '',
    password: '',
    countryCode: '',
    phone: '',
})

export const useTravelerStore = function (name) {
    return createStore({
        id: 'travelers-' + name,

        state
    })
}
