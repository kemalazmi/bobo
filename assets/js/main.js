 $( document ).ready(function() { 
$( function() {
    $( ".datepicker" ).datepicker({
      numberOfMonths: 2,
      showButtonPanel: true,
      "showButtonPanel":  false

    });
  } );



 $( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
      showButtonPanel: true,
      "showButtonPanel":  false,
          numberOfMonths: 2
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",

      showButtonPanel: true,
      "showButtonPanel":  false,
        numberOfMonths: 2
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );

 // propagation
 
  $(".DropdownPoR").click(function(event){
    event.stopPropagation(); 
});


  // slider range
  
$( function() {
    $( ".slider-range" ).slider({
      range: true,
      min: 0,
      max: 200000000,
      values: [ 0, 150000000 ],
      slide: function( event, ui ) {
        $( ".amount" ).val( "IDR " + ui.values[ 0 ] + " - IDR "  + ui.values[ 1 ] );
      }
    });
    $( ".amount" ).val( "IDR " + $( ".slider-range" ).slider( "values", 0 ) +
      " - IDR " + $( ".slider-range" ).slider( "values", 1 ) );
  } );




// countdown
  function count() {
        var startTime = document.getElementById('hms').innerHTML;
        var pieces = startTime.split(':');
        var time = new Date();
        time.setHours(pieces[0]);
        time.setMinutes(pieces[1]);
        time.setSeconds(pieces[2]);
        var timedif = new Date(time.valueOf() - 1000);
        var newtime = timedif.toTimeString().split(' ')[0];
        document.getElementById('hms').innerHTML = newtime;
        setTimeout(count,1000);
    }
    count();
});
 