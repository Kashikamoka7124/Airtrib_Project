import Vue from 'vue'

const pages = [
    'FlightsContainer',
    'ClientFormCard',
    'BookingSummary',
    'RegisterFields',
    'RegisterOrganizations',
    'TribesOrganizations',
    'MakeDonation',
    'FlashMessage',
]

const allPages = {}

for (let i = 0; i < pages.length; i++) {
    const page = pages[i]

    allPages[page] = require('./' + page).default
}

export default allPages
