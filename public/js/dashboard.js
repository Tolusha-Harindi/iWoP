$(function() {
    $('.project').each(function() {
      var $projectBar = $(this).find('.bar');
      var $projectPercent = $(this).find('.percent');
      var $projectRange = $(this).find('.ui-slider-range');
      $projectBar.slider({
        range: "min",
        animate: true,
        value: 1,
        min: 0,
        max: 100,
        step: 1,
        slide: function(event, ui) {
          $projectPercent.val(ui.value + "%");
        },
        change: function(event, ui) {
          var $projectRange = $(this).find('.ui-slider-range');
          var percent = ui.value;
          if (percent < 30) {
            $projectPercent.css({
              'color': 'red'
            });
            $projectRange.css({
              'background': '#f20000'
            });
          } else if (percent > 31 && percent < 70) {
            $projectPercent.css({
              'color': 'gold'
            });
            $projectRange.css({
              'background': 'gold'
            });
          } else if (percent > 70) {
            $projectPercent.css({
              'color': 'green'
            });
            $projectRange.css({
              'background': 'green'
            });
          }
        }
      });
    })
  })