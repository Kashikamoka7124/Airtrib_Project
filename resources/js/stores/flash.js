import { createStore } from 'pinia'

export const useFlashStore = createStore({
    id: 'flash',

    state: () => ({
        message: null,
        type: 'success'
    }),

    actions: {
        flash(message) {
            this.state.message = message

            setTimeout(() => {
                this.hide()
            }, 4000)
        },

        success(message) {
            this.state.type = 'success'
            this.flash(message)
        },

        danger(message) {
            this.state.type = 'danger'
            this.flash(message)
        },

        hide() {
            this.state.message = null
        }
    }
})
