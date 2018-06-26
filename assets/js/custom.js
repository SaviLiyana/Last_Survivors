$(window).on('load',function() {
    $(".preloader").fadeOut("slow")
});

$(document).ready( function () {
    $('#DataTable').DataTable();
});


$(document).ready( function () {
    $('#DataTable1').DataTable();
});

function filterColumn ( i ) {
  $('#DataTable').DataTable().column( i ).search(
      $('#col'+i+'_filter').val()
  ).draw();
}

function filterNon ( i ) {
  $('#DataTable').DataTable().column( i ).search("").draw();
}

$(document).ready(function() {
    $('#DataTable').DataTable();
    $('select.column_filter').on( 'change', function () {
      var category = document.getElementById('col2_filter');
      if (category.value != "All"){
        filterColumn( $(this).attr('data-column') );
      }
      else{
        filterNon( $(this).attr('data-column') );
      }
    } );
} );



function filterNameColumn ( i ) {
  $('#DataTable').DataTable().column( i ).search(
      $('#Username').val()
  ).draw();
}
function filterNameNon ( i ) {
  $('#DataTable').DataTable().column( i ).search("").draw();
}

$(document).ready(function() {
    $('#DataTable').DataTable();
    $('select.column_name_filter').on( 'change', function () {
      var transactionType = document.getElementById('Username');
      if (transactionType.value != "All"){
        filterNameColumn( $(this).attr('data-column') );
      }
      else{
        filterNameNon( $(this).attr('data-column') );
      }
    } );
});



function filterTypeColumn ( i ) {
  $('#DataTable').DataTable().column( i ).search(
      $('#col'+i+'_filter').val()
  ).draw();
}

function filterTypeNon ( i ) {
  $('#DataTable').DataTable().column( i ).search("").draw();
}

$(document).ready(function() {
    $('#DataTable').DataTable();

    $('select.column_type_filter').on( 'change', function () {
      var transactionType = document.getElementById('col1_filter');
      if (transactionType.value != "All"){
        filterTypeColumn( $(this).attr('data-column') );
      }
      else{
        filterTypeNon( $(this).attr('data-column') );
      }
    } );
} );


function filterDateColumn ( i ) {
  $('#DataTable').DataTable().column( i ).search(
      $('#Date').val()
  ).draw();
}

$(document).ready(function() {
    $('#DataTable').DataTable();
    $('input.column_filter_date').on( 'change', function () {
        filterDateColumn( $(this).attr('data-column') );
    });
});
