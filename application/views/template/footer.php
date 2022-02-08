
    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url() ?>assets/datatable/jquery-3.3.1.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="<?php echo base_url() ?>assets/datatable/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/datatable/dataTables.bootstrap.min.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo base_url() ?>assets/js/sb-admin.js"></script>

    <!-- autocomplete -->
    <script src="<?php echo base_url() ?>assets/autocomplete/jquery-ui.min.js"></script>


    <!-- print -->
    <script src="<?php echo base_url() ?>assets/datatable/print/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/datatable/print/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>assets/datatable/print/vfs_fonts.js"></script>
    <script src="<?php echo base_url() ?>assets/datatable/print/buttons.html5.min.js"></script>

   

    <script>
        
    $(document).ready(function() {
        
        $('.all').dataTable();
    });$(".js-example-basic-single").select2();
    </script>

    <!-- <script>
    $(document).ready(function() {
        $('#detail_penjualan').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'pdfHtml5',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                    title: 'Laporan',
                    customize : function(doc){
                        var colCount = new Array();
                        $('#detail_penjualan').find('tbody tr:first-child td').each(function(){
                            if($(this).attr('colspan')){
                                for(var i=1;i<=$(this).attr('colspan');$i++){
                                    colCount.push('*');
                                }
                            }else{ colCount.push('*'); }
                        });
                        doc.content[1].table.widths = colCount;
                    }
                }
            ]

        } );
    });
    </script> -->

    <?php for ($j = 1; $j <= 5; $j++) { ?>
    <script type="text/javascript">   
        $(document).ready(function(){       
            $('#nama_bahan<?php echo $j ?>').autocomplete({
                source: "<?php echo site_url('admin/get_bahan');?>",
                position: {
                    collision: "flip"
                },
                select: function (event, ui) {
                    $('[name="nama_bahan<?php echo $j ?>"]').val(ui.item.label); 
                    $('[name="id_bahan<?php echo $j ?>"]').val(ui.item.description);
                    $('[name="harga<?php echo $j ?>"]').val(ui.item.harga);
                },
            });
        });
    </script>
    <?php } ?>

    <script type="text/javascript">
        $(document).ready(function() {
            

            setInterval(timestamp, 1000);
        });

        function timestamp() {
            $.ajax({
                url: '<?php echo base_url() ?>login/timestamp',
                success: function(data) {
                    $('#timestamp').html(data);
                },
            });
        }
    </script>
    
    <script type="text/javascript">   
        $(document).ready(function(){       
            $('#nama_bahan').autocomplete({
                source: "<?php echo site_url('admin/get_bahan');?>",
                position: {
                    collision: "flip"
                },
                select: function (event, ui) {
                    $('[name="nama_bahan"]').val(ui.item.label); 
                    $('[name="id_bahan"]').val(ui.item.description);
                    $('[name="satuan"]').val(ui.item.satuan);
                },
            });
        });
    </script>
s
    <script type="text/javascript">
        $(document).ready(function() {
            
            var t = $('#example').DataTable({
                "dom": '<"top"><"bottom"><"clear">',
                responsive: true
            });
            
            var counter = 1;

            
            $('#addRow').on('click', function () {

                t.row.add( [
                    // '<input type="text" id="id_menu'+counter+'" name="id_menu'+counter+'" class="form-control" readonly>',
                    '<select name="nama_menu'+counter+'" id="nama_menu'+counter+'" class="nama_menu'+counter+' js-example-basic-single form-control"></select>',
                    '<input type="number" name="harga'+counter+'" class="form-control" id="harga'+counter+'" readonly onkeyup="total2('+counter+')" onchange="total2('+counter+')">',
                    '<input type="number" name="jumlah'+counter+'" class="jumlahChange form-control" id="jumlah'+counter+'" onkeyup="total2('+counter+')" oninput="totals()" data-id='+counter+' min=0 value=0>',
                    '<input type="text" name="cangkirShow'+counter+'" id="cangkirShow'+counter+'" value="0" readonly><input type="hidden" name="cangkir'+counter+'" id="cangkir'+counter+'" value="0" readonly>',
                    '<input type="number" name="total'+counter+'" class="form-control" id="total'+counter+'" readonly value=0>',
                    '<button data-id="'+counter+'" class="btnRemove">Hapus</button>',
                ] ).draw( false );



                $(".js-example-basic-single").select2();
         
                $('#counter').val(counter);

                $.ajax({
                    type: 'POST',
                    url: "<?php echo site_url('kasir/get_menu');?>",
                    async : false,
                    dataType : 'json',
                    success: function (data) {
                        // alert(data.nama_bahan);
                        var html = '';
                        var i;      
                        html+="<option value=''>Pilih Bahan</option>";                  
                        for(i=0; i<data.length; i++){
                            html += '<option data-counter="'+counter+'" data-harga="'+data[i].harga+'" data-stok="'+data[i].stok_cangkir+'" value="'+data[i].id_bahan+'">'+data[i].nama_bahan+'</option>';
                        }
                        $('.nama_menu'+counter).html(html);
                    }

                });

                var conter = $('#counter').val();

                $('.nama_menu'+conter).change(function () {

                    var harga = $(this).find(':selected').attr('data-harga');
                    var stok = $(this).find(':selected').attr('data-stok');
                     $('#harga'+conter+'').val(harga); 
                     $('#cangkir'+conter+'').val(stok); 
                     $('#cangkirShow'+conter+'').val(stok); 
                     $('#Diskon'+'').val(item);
                     
                    if(conter==1){
                        var dataSebelumnya = 0;
                        var menuSebelumnya = document.getElementById("nama_menu" + conter).value;
                        var jumlahSekarang = document.getElementById("cangkirShow" + conter).value;
                        document.getElementById("cangkir" + conter).value = jumlahSekarang;
                    }else{
                        var dataSebelumnya = (parseInt(conter) - 1);
                        var menuSebelumnya = document.getElementById("nama_menu" + dataSebelumnya).value;
                        var jumlahSebelumnya = document.getElementById("cangkirShow" + dataSebelumnya).value;

                        // alert(menuSebelumnya);
                        var menuSekarang = document.getElementById("nama_menu" + conter).value;
                        alert(menuSebelumnya);
                        alert(menuSekarang);
                        if(menuSebelumnya == menuSekarang){
                            document.getElementById("cangkirShow" + conter).value = jumlahSebelumnya;
                            document.getElementById("cangkir" + conter).value = jumlahSebelumnya;

                        }
                    }
                });
                counter++;
     
            } );
            $("body").on( "click", ".btnRemove", function( event ) {
                $(this).parents("tr").remove();
                var conter = parseInt($(this).attr('data-id')) - 1;
                $('#counter').val(conter);
                
            });
         
            // Automatically add a first row of data
            $('#addRow').click();
        } );
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            

            
            $("body").on( "change", ".jumlahChange", function( event ) {
                var data = $(this).attr('data-id');
              

                var harga = 0;
                var jumlah = 0;
                var txtShowCangkir = parseInt(document.getElementById("cangkir"+data).value) - parseInt(document.getElementById("jumlah"+data).value);
                // for (i = 1; i <= document.getElementById('counter').value; i++) {
                    harga = parseInt(document.getElementById('harga' + data).value);
                    jumlah = parseInt(document.getElementById('jumlah' + data).value);
                    document.getElementById('total' + data).value = harga * jumlah;
                    document.getElementById('cangkirShow' + data).value = txtShowCangkir;
                    
                    if(document.getElementById('jumlah'+ data).value > parseInt(document.getElementById('cangkir'+ data).value)){
                        alert('GAK CUKUP BOS');
                        $("#btnTotal").attr('disabled','disabled');
                        document.getElementById('btnTotal').removeAttribute('onclick');
                    }else{
                        $('#btnTotal').attr('onclick','totals()');
                        document.getElementById('btnTotal').removeAttribute('disabled');
                    }
            });

            var t = $('#example2').DataTable({
                "dom": '<"top"><"bottom"><"clear">',
                responsive: true
            });
            var counter2 = 1;
         
            $('#addRow2').on('click', function () {
                t.row.add( [
                    '<input type="text" id="id_bahan'+counter2+'" name="id_bahan'+counter2+'" class="form-control" readonly>',
                    '<input type="text" name="nama_bahan'+counter2+'" id="nama_bahan'+counter2+'" class="searchInput2 form-control">',
                    '<input type="number" name="harga'+counter2+'" class="form-control" id="harga'+counter2+'" readonly">',
                    '<input type="number" name="jumlah'+counter2+'" class="form-control" id="jumlah'+counter2+'" value=0 onkeyup="total()" oninput="totals()" onchange="total()" >',
                    '<input type="text" name="satuan'+counter2+'" class="form-control" id="satuan'+counter2+'" readonly>',
                    '<input type="number" name="total'+counter2+'" class="form-control" readonly id="total'+counter2+'" value=0">'
                ] ).draw( false );
         
                $('#counter').val(counter2);

                var selector2 = 'input.searchInput2';
                var a = counter2;
                $(document).on('keydown.autocomplete', selector2,function(){
                    //var b = a;
                    $('#nama_bahan'+a+'').autocomplete({
                        source: "<?php echo site_url('admin/get_bahan');?>",
                        select: function (event, ui) {
                            $('#nama_bahan'+a+'').val(ui.item.label); 
                            $('#id_bahan'+a+'').val(ui.item.description);
                            $('#harga'+a+'').val(ui.item.harga);
                            $('#satuan'+a+'').val(ui.item.satuan);
                        },
                    });
                });
                counter2++;        
            } );
         
            // Automatically add a first row of data
            $('#addRow2').click();
        } );
    </script>

    <script type="text/javascript">
        function total(){
                var a =0;
                var b =0;
                var harga = 0;
                var jumlah = 0;
                for (i = 1; i <= document.getElementById('counter').value; i++) {
                    harga = parseInt(document.getElementById('harga' + i).value);
                    jumlah = parseInt(document.getElementById('jumlah' + i).value);
                    document.getElementById('total' + i).value = harga * jumlah;
                    a += parseInt(document.getElementById('jumlah'+i).value);
                    b += parseInt(document.getElementById('total'+i).value);
                    document.getElementById('totalJumlahAll').value = a;
                    document.getElementById('totalHargaAll').value = b;
                }
            }

            function total2(dataIki){
                alert(dataIki);
                // var harga = 0;
                // var jumlah = 0;
                // // for (i = 1; i <= document.getElementById('counter').value; i++) {
                //     harga = parseInt(document.getElementById('harga' + dataIki).value);
                //     jumlah = parseInt(document.getElementById('jumlah' + dataIki).value);
                //     document.getElementById('total' + dataIki).value = harga * jumlah;
                    
                //     if(document.getElementById('jumlah'+ dataIki).value > parseInt(document.getElementById('cangkir'+ dataIki).value)){
                //         alert('GAK CUKUP BOS');
                //         $("#btnTotal").attr('disabled','disabled');
                //         document.getElementById('btnTotal').removeAttribute('onclick');
                //     }else{
                //         $('#btnTotal').attr('onclick','totals()');
                //         document.getElementById('btnTotal').removeAttribute('disabled');
                //     }
                // }
            }
    </script>
    <script type="text/javascript">
        function totals() {
            if (document.getElementById('jumlah1').value == 0 || document.getElementById('total1').value == 0 || document.getElementById('nama_menu1').value == '') {
                document.getElementById('nama_menu1').setAttribute('placeholder','! Isi Menu dan Jumlah terlebih dahulu');
            } else {

                var a = 0;
                for (i = 1; i <= document.getElementById('counter').value; i++) {
                    a += parseInt(document.getElementById('total'+i).value);
                    document.getElementById('totals').value = a;
                }
                document.getElementById('simpan').removeAttribute('disabled');
                document.getElementById('bayar').removeAttribute('disabled');
            }
            
        }
    </script>
    <script type="text/javascript">
        $('#bayar').keyup(function() {
            bayar = parseInt(document.getElementById('bayar').value);
            totals = parseInt(document.getElementById('totals').value);
            document.getElementById('kembalian').value = bayar - totals;
        })
        $('#bayar').change(function() {
            bayar = parseInt(document.getElementById('bayar').value);
            totals = parseInt(document.getElementById('totals').value);
            document.getElementById('kembalian').value = bayar - totals;
        })
    </script>

    <script type="text/javascript">
        var datepickers = [{
          id: 'startdate',
          value: null
        }, {
          id: 'enddate',
          value: null
        }
      ];
      //Translate 'yy/mm/dd' string to UTC date
      const yymmddUTC = str => new Date(...str.split('/').map((value,index) => index == 1 ? value-- : value));
      //DataTables object definition
      var myDataTable = $('#detail_penjualan').DataTable({
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // converting to interger to find total
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
                
         var jumlah = api
                .column( 4,{ page: 'current'})
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                
         var friTotal = api
                .column( 5,{ page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

                 var friTotalAll = api
                .column( 5)
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
            
                
            // Update footer by showing the total with the reference of the column index 
            $( api.column( 3 ).footer() ).html('Total');
            $( api.column( 4 ).footer() ).html(jumlah);
            $( api.column( 5 ).footer() ).html(friTotal);
        },
        "order": [[ 1, "desc" ]],
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'pdfHtml5',
                footer: true,
                "oSelectorOpts": { filter: 'applied', order: 'current' },
                orientation: 'landscape',
                pageSize: 'LEGAL',
                title: function() {
                  return 'Laporan Penjualan (' + $("#startdate").val() + ') - (' + $("#enddate").val() +')';
              },
                customize : function(doc){
                    var colCount = new Array();
                    $('#detail_penjualan').find('tbody tr:first-child td').each(function(){
                        if($(this).attr('colspan')){
                            for(var i=1;i<=$(this).attr('colspan');$i++){
                                colCount.push('*');
                            }
                        }else{ colCount.push('*'); }
                    });
                    doc.content[1].table.widths = colCount;
                }
            }
        ]
      });
      //Limit datepicker options to those valid for current dataset
      var dates = myDataTable.column(1).data().unique().sort();
      var minDate = dates[0];
      var maxDate = dates[dates.length-1];
      //datepicker objects definition
      $('.datepicker').datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        defaultDate: minDate,
        changeYear: true,
        yearRange: minDate.substr(0,4)+':'+maxDate.substr(0,4),
        onSelect: function (selectedDate) {
          let datepicker = datepickers.find(entry => entry.id == $(this).attr('id'));
          $(`#${datepicker.coid}`).datepicker('option', datepicker.limiter, selectedDate);
          datepicker.value = yymmddUTC(selectedDate);
          myDataTable.draw();
        }
      }).on('change', function(){
        datepickers[datepickers.findIndex(item => item.id == $(this).attr('id'))].value = yymmddUTC($(this).val());
        myDataTable.draw();
      });
      //External search function
      $.fn.DataTable.ext.search.push((settings, row) => {
        let rowDate = yymmddUTC(row[1]);
        return (rowDate >= datepickers[0].value || datepickers[0].value == null) && (rowDate <= datepickers[1].value || datepickers[1].value == null);
      });
    </script>

    <script type="text/javascript">
        var datepickers2 = [{
          id: 'startdate2',
          value: null
        }, {
          id: 'enddate2',
          value: null
        }
      ];
      //DataTables object definition
      var myDataTable2 = $('#detail_pembelian').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'pdfHtml5',
                "oSelectorOpts": { filter: 'applied', order: 'current' },
                orientation: 'landscape',
                pageSize: 'A4',
                title: function() {
                  return 'Laporan Pembelian (' + $("#startdate2").val() + ') - (' + $("#enddate2").val() +') <br> <hr> no nota';
              },
                customize : function(doc){
                    var colCount = new Array();
                    $('#detail_pembelian').find('tbody tr:first-child td').each(function(){
                        if($(this).attr('colspan')){
                            for(var i=1;i<=$(this).attr('colspan');$i++){
                                colCount.push('*');
                            }
                        }else{ colCount.push('*'); }
                    });
                    doc.content[1].table.widths = colCount;
                }
            }
        ]
      });
      //Limit datepicker options to those valid for current dataset
      var dates2 = myDataTable2.column(1).data().unique().sort();
      var minDate2 = dates2[0];
      var maxDate2 = dates2[dates2.length-1];
      //datepicker objects definition
      $('.datepicker2').datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        defaultDate: minDate2,
        changeYear: true,
        yearRange: minDate2.substr(0,4)+':'+maxDate2.substr(0,4),
        onSelect: function (selectedDate) {
          let datepicker2 = datepickers2.find(entry => entry.id == $(this).attr('id'));
          $(`#${datepicker2.coid}`).datepicker('option', datepicker2.limiter, selectedDate);
          datepicker2.value = yymmddUTC(selectedDate);
          myDataTable2.draw();
        }
      }).on('change', function(){
        datepickers2[datepickers2.findIndex(item => item.id == $(this).attr('id'))].value = yymmddUTC($(this).val());
        myDataTable2.draw();
      });
      //External search function
      $.fn.DataTable.ext.search.push((settings, row) => {
        let rowDate2 = yymmddUTC(row[1]);
        return (rowDate2 >= datepickers2[0].value || datepickers2[0].value == null) && (rowDate2 <= datepickers2[1].value || datepickers2[1].value == null);
      });
    </script>
</body>

</html>
