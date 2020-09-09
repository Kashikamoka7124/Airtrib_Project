import { ref } from '@vue/composition-api'

export default function(): object {
    let isOpen = ref<boolean>(false)

    let toggle = function (): void {
        if (isOpen.value) {
            hide()
            return
        }

        show()
    }

    function show(): void {
        isOpen.value = true

        setTimeout(() => document.addEventListener('click', handleClickOutside))
    }

    function hide(): void {
        isOpen.value = false

        document.removeEventListener('click', handleClickOutside)
    }

    function handleClickOutside (): void {
        if (! (event.target as Element).closest('#dropdown-container'))
            hide()
    }

    return { isOpen, toggle }
}
