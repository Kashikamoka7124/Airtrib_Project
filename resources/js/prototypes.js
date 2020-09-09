Array.prototype.last = function () {
    return this[this.length - 1]
}

Date.prototype.toUTCDateString = function () {
    return this.toUTCString().replace(/( (?:[01]\d|2[0123]):(?:[012345]\d):(?:[012345]\d) GMT)/, '')
    // return this.toUTCString().replace(' 00:00:00 GMT', '')
}
