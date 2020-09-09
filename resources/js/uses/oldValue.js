import { isObject } from 'Util'

export default function() {
    function old (name) {
        return isObject(Form.old) ? Form.old[name] : ''
    }

    return {
        old
    }
}
