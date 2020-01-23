function PatchFridayModule() {
    this.loadStylesheet();
    this.well = this.makeWell();
    this.setInterval(6*60*60*1000); // 6 hours
}

PatchFridayModule.prototype = Object.create(BaseModule.prototype);
PatchFridayModule.prototype.constructor = PatchFridayModule;
PatchFridayModule.prototype.update = function(data) {
    this.well.empty();
    this.well.append(
        $('<h2>').text(data.title),
        $('<img>')
            .attr('src', data.src)
    );
}

new PatchFridayModule();
