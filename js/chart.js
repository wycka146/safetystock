function Chart(canvasSelect, data) {
    // Variables
    var padding = 10;
    var blockWidth = 40;

    var demandNumberWidth = 40;
    var monthNumberHeight = 20;

    var safetyLevel = 70;
    var topOffset = 30;

    var workingWidth;
    var workingHeight;
    var blockGapWidth;
    var ratio;

    // Grid
    var horizontalLines = 8;

    // Methods
    this.draw = draw;
    this.drawDemandBlocks = drawDemandBlocks;

    function draw() {
        var canvas = document.getElementById("product-flow");
        var context = canvas.getContext("2d");

        calculateValues(canvas);

        drawDemandGrid(context);
        drawSafetyLevel(context);
        drawDemandBlocks(context);
    }

    function drawSafetyLevel(context) {
        context.fillStyle = "rgb(170, 170, 60)";
        context.fillRect(
            padding + demandNumberWidth,
            this.workingHeight + padding - this.ratio * safetyLevel,
            this.workingWidth,
            3);

        context.fillRect(
            padding + demandNumberWidth,
            this.workingHeight + padding - this.ratio * safetyLevel-24,
            160,
            25);

        context.fillStyle = "rgb(255, 255, 255)";
        context.font = "14px Arial";
        context.textAlign = "left";
        context.fillText(
                "Saugus atsargų lygis",
                padding + demandNumberWidth + 10,
                this.workingHeight + padding - this.ratio * safetyLevel-5);
    }

    function calculateValues(canvas) {
        this.workingWidth = canvas.width - padding * 2 - demandNumberWidth;
        this.workingHeight = canvas.height - padding * 2 - monthNumberHeight;
        this.blockGapWidth = (this.workingWidth - blockWidth * data.length) / (data.length - 1);
        this.ratio = this.workingHeight / (safetyLevel + topOffset);
    }

    function drawDemandGrid(context) {
        var verticalLineDistance = this.workingHeight / horizontalLines;

        context.strokeStyle = "rgb(200, 200, 200)";
        context.fillStyle = "rgb(100, 100, 100)";
        context.font = "12px Arial";
        context.textAlign = "right";
        for (var i = 0; i < horizontalLines; i++) {
            console.log(this.ratio);
            context.fillText(
                "" + Math.round((i * verticalLineDistance) / this.ratio),
                padding+20,
                this.workingHeight + padding - i * verticalLineDistance + 4);

            context.moveTo(
                padding + demandNumberWidth- 10,
                this.workingHeight + padding - i * verticalLineDistance
            );

            context.lineTo(
                padding + this.workingWidth + demandNumberWidth,
                this.workingHeight + padding - i * verticalLineDistance
            );
            context.stroke();
        }

        context.fillStyle = "rgb(200, 200, 200)";
        context.fillRect(
            padding + demandNumberWidth - 5,
            padding,
            1,
            this.workingHeight
        );

        context.textAlign = "center";
        context.fillStyle = "rgb(100, 100, 100)";
        // Drawing months
        for (var i = 0; i < data.length; i++) {
            context.fillText(
                "" + data[i].month,
                padding + demandNumberWidth + i * (blockWidth + this.blockGapWidth) + blockWidth / 2,
                padding+ this.workingHeight + 16);
        }
    }

    function drawDemandBlocks(context) {

        // Calculating maximum demand value:
        var maxDemand = 0;
        for (var i = 0; i < data.length; i++)
            if (data[i].demand > maxDemand) 
                maxDemand = data[i].demand;

        // Block color
        context.fillStyle = "rgb(234, 172, 80)"

        // Drawing blocks 
        for (var i = 0; i < data.length; i++) {
            height = Math.round(this.ratio * data[i].demand);

            context.fillRect(
                padding + demandNumberWidth + i * (blockWidth + this.blockGapWidth),
                this.workingHeight + padding - height,
                blockWidth,
                height);
        }

        //---------------------
        // Drawing horizontal lines
    }
}