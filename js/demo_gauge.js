
          /* gauge.js start */
        //gaugejs("dashboard-gauge","dashboard-gauge-font",90);
        //gaugejs("diabetes-gauge","diabetes-gauge-font",90);
        //gaugejs("diabetes-gauge-accr","diabetes-gauge-accr-value",95);
        //gaugejs("diabetes-non-accr-gauge","diabetes-non-accr-gauge-font",85);


          var opts = {
              lines: 12, // The number of lines to draw
              angle: 0, // The length of each line
              lineWidth: 0.20, // The line thickness
              pointer: {
                length: 0.78, // The radius of the inner circle
                strokeWidth: 0.015, // The rotation offset
                color: '#000000' // Fill color
              },
              limitMax: 'false',   // If true, the pointer will not go past the end of the gauge
              colorStart: '#2DAAE1',   // Colors
              colorStop: '#2DAAE1',    // just experiment with them
              strokeColor: '#E0E0E0',   // to see which ones work best for you
              generateGradient: true
            };
            console.log(window.location.pathname+window.location.search);
             if (window.location.pathname+window.location.search == '/flexxia-demo/diabetes.php') {
              alert('working');
            var targetDiabetes = document.getElementById("diabetes-gauge"); // your canvas element
            var gaugeDiabetes = new Gauge(targetDiabetes).setOptions(opts); // create sexy gauge!
            gaugeDiabetes.setTextField(document.getElementById("diabetes-gauge-font"));
            // document.getElementById('preview-textfield-gauge').innerHTML = "%";
            var textRenderer = new TextRenderer(document.getElementById("diabetes-gauge-font"));
            textRenderer.render = function(gaugeDiabetes) {
                   percentage = gaugeDiabetes.displayedValue / gaugeDiabetes.maxValue
                   this.el.innerHTML = (percentage * 100).toFixed(0) + "%"
                };
            gaugeDiabetes.setTextField(textRenderer);
            gaugeDiabetes.maxValue = 100; // set max gauge value
            gaugeDiabetes.animationSpeed = 6; // set animation speed (32 is default value)
            gaugeDiabetes.set(90); // set actual value
          }
          else if (window.location.pathname+window.location.search == '/fflexxia-demo/diabetes.php?s=acceredited') {
            /*Gauge for diabetes accreted program*/
             var targetDiabetesAccr = document.getElementById("diabetes-gauge-accr"); // your canvas element
            var gaugeDiabetesAccr = new Gauge(targetDiabetesAccr).setOptions(opts); // create sexy gauge!
            gaugeDiabetesAccr.setTextField(document.getElementById("diabetes-gauge-accr-value"));
            // document.getElementById('preview-textfield-gauge').innerHTML = "%";
            var textRenderer = new TextRenderer(document.getElementById("diabetes-gauge-accr-value"));
            textRenderer.render = function(gaugeDiabetesAccr) {
                   percentage = gaugeDiabetesAccr.displayedValue / gaugeDiabetesAccr.maxValue
                   this.el.innerHTML = (percentage * 100).toFixed(0) + "%"
                };
            gaugeDiabetesAccr.setTextField(textRenderer);
            gaugeDiabetesAccr.maxValue = 100; // set max gauge value
            gaugeDiabetesAccr.animationSpeed = 6; // set animation speed (32 is default value)
            gaugeDiabetesAccr.set(95); // set actual value

          }
           else if (window.location.pathname+window.location.search == '/flexxia-demo/diabetes.php?s=non-acceredited') {
            /*Gauge for diabetes accreted program*/
             var targetDiabetesAccr = document.getElementById("diabetes-gauge-non-accr"); // your canvas element
            var gaugeDiabetesAccr = new Gauge(targetDiabetesAccr).setOptions(opts); // create sexy gauge!
            gaugeDiabetesAccr.setTextField(document.getElementById("diabetes-gauge-non-accr-value"));
            // document.getElementById('preview-textfield-gauge').innerHTML = "%";
            var textRenderer = new TextRenderer(document.getElementById("diabetes-gauge-non-accr-value"));
            textRenderer.render = function(gaugeDiabetesAccr) {
                   percentage = gaugeDiabetesAccr.displayedValue / gaugeDiabetesAccr.maxValue
                   this.el.innerHTML = (percentage * 100).toFixed(0) + "%"
                };
            gaugeDiabetesAccr.setTextField(textRenderer);
            gaugeDiabetesAccr.maxValue = 100; // set max gauge value
            gaugeDiabetesAccr.animationSpeed = 6; // set animation speed (32 is default value)
            gaugeDiabetesAccr.set(85); // set actual value

          }

            /* gauge.js end*/

