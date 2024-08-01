$(document).ready(function() {
  $("#example").DataTable({
    language: {
      lengthMenu: "Mostrar _MENU_ registros",
      zeroRecords: "No se encontraron resultados",
      info: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
      infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
      infoFiltered: "(filtrado de un total de _MAX_ registros)",
      sSearch: "Buscar:",
      oPaginate: {
        sFirst: "Primero",
        sLast: "Último",
        sNext: "Siguiente",
        sPrevious: "Anterior",
      },
      sProcessing: "Procesando...",
    },
    responsive: "true",
    dom: "Bfrtilp",
    buttons: [
      {
        extend: "copy",
        text: '<i class="far fa-copy"></i> Copiar',
        titleAttr: "Copiar al portapapeles",
        className: "btn btn-primary",
      },
      {
        extend: "csv",
        text: '<i class="fas fa-file-csv"></i> Exportar a CSV',
        titleAttr: "Exportar a CSV",
        className: "btn btn-warning",
      },
      {
        extend: "excelHtml5",
        text: '<i class="fas fa-file-excel"></i> Exportar a Excel',
        titleAttr: "Exportar a Excel",
        className: "btn btn-success",
      },
      {
        extend: "pdfHtml5",
        text: '<i class="fas fa-file-pdf"></i> Exportar a PDF',
        titleAttr: "Exportar a PDF",
        className: "btn btn-danger",
      },
      {
        extend: "print",
        text: '<i class="fa fa-print"></i> Imprimir',
        titleAttr: "Imprimir",
        className: "btn btn-info",
      },
    ],
  });
});
