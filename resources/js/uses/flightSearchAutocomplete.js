import debounce from 'debounce'
import { ref } from '@vue/composition-api'
import { useFlightStore } from 'Store/flight'

export default function(name, placeholder) {
    const store = useFlightStore(),
          isOpen = ref(false),
          items = ref([]),
          processing = ref(true),
          selected = ref({}),
          status = ref(''),
          value = ref(''),
          current = ref(0)

    if (store.state[name]) {
        value.value = placeholder + ' ' + store.state[name].name
        selected.value = { name: store.state[name].name, iata: store.state[name].iata, }
    }

    const methods = {
        onInput: debounce(function () {
            console.log('onInput')
            if (value.value) {
                isOpen.value = true
                processing.value = true
                status.value = 'searching...'

                axios.get('airports?search=' + value.value)
                    .then(response => {
                        items.value = response
                        processing.value = false

                        if (!response.length)
                            status.value = 'No Records Found!'
                    })
            }
            else {
                methods.reset()
            }
        }, 200),

        onFocus() {
            console.log('onFocus')
            value.value = selected.value.name || ''

            document.addEventListener('click', methods.handleClickOutside)
        },

        hide() {
            isOpen.value = false
            current.value = 0
            items.value = []

            document.removeEventListener('click', methods.handleClickOutside)
        },

        reset() {
            selected.value = {}
            methods.hide()

            store.state[name] = null
        },

        move(offset) {
            let newIndex = current.value + offset

            if (newIndex >= 0 && newIndex < items.value.length) {
                current.value = newIndex
            }
        },

        select(item) {
            if (!item)
                item = items.value[current.value]

            store.state[name] = { name: item.name, iata: item.iata }

            value.value = `${placeholder} ${item.name} (${item.iata})`
            selected.value = item
            methods.hide()
            document.querySelector('.' + name + ' input').blur()
        },

        handleClickOutside() {
            if (! event.target.closest('.' + name)) {
                if (selected.value.name) {
                    value.value = `${placeholder} ${selected.value.name} (${selected.value.iata})`
                    methods.hide()
                    return
                }

                methods.reset()
            }
        }
    }

    return {
        isOpen,
        items,
        processing,
        selected,
        status,
        value,
        current,
        ...methods
    }
}
