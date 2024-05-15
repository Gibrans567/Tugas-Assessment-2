<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Permohonan Informasi</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    // Fetch data on page load
    fetchData();

    function fetchData() {
        $.ajax({
            url: 'fetch_data.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var tableContent = "";
                $.each(data, function(index, value) {
                    tableContent += "<tr>";
                    tableContent += "<td>" + value.nama + "</td>";
                    tableContent += "<td>" + value.alamat + "</td>";
                    tableContent += "<td>" + value.pekerjaan + "</td>";
                    tableContent += "<td>" + value.kontak + "</td>";
                    tableContent += "<td>" + value.rincian + "</td>";
                    tableContent += "<td>" + value.tujuan + "</td>";
                    tableContent += "<td>" + value.cara_memperoleh + "</td>";
                    tableContent += "<td>" + value.cara_mendapatkan + "</td>";
                    tableContent += "<td><button class='deleteBtn' data-id='" + value.id + "'>Delete</button></td>";
                    tableContent += "</tr>";
                });
                $("#dataTable tbody").html(tableContent);
            },
            error: function(jqXHR, textStatus, errorThrown){
                alert('Error: ' + textStatus + ' - ' + errorThrown);
            }
        });
    }

    // Handle delete button click
    $(document).on('click', '.deleteBtn', function() {
        var id = $(this).data('id');
        $.ajax({
            url: 'delete_data.php',
            type: 'GET',
            data: { id: id },
            success: function(response) {
                alert(response);
                fetchData(); // Refresh data
            },
            error: function(jqXHR, textStatus, errorThrown){
                alert('Error: ' + textStatus + ' - ' + errorThrown);
            }
        });
    });
});
</script>
<style>
        
        table {
            border-collapse: collapse; 
            margin: 20px auto; 
        }
        th, td {
            border: 1px solid #ccc; 
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .container {
            max-width: 1536px;
            margin: 0 auto;
            padding: 20px;
        }

        .button {
            color: white;
            padding: 4px 10px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            margin: 2px 4px;
        }

        .button:hover {
            filter: brightness(120%);
            cursor: pointer;
        }

        .create-btn {
            background-color: #008CBA; 
            padding: 8px 20px;
        }

        .action-buttons {
            display: flex;
            text-align: center;
            margin: 5px;
        }

        .edit-btn {
            background-color: #008CBA;
        }

        .no-padding {
            padding: 0px;
        }

        .delete-btn{
            background-color: #f44336;
            height: 28px;
        }

        .alert{
            position: relative;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            font-size: 16px;
            line-height: 1.5;
            text-align: center;
            transition-delay: 2s;
            font-size: 16pt;
        }

        .alert.success{
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }

        .alert.danger{
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
        }

        .alert.info{
            color: #31708f;
            background-color: #d9edf7;
            border-color: #bce8f1;
        }

        .close{
            font-size: 20px;
            background: none;
            border: none;
            color: inherit;
            position: absolute;
            top: 0;
            right: 0;
            margin: 10px;
            font-weight: bold;
            line-height: 1;
            cursor: pointer;
            transition: 0.3s;
        }

        .close.hover{
            filter: brightness(70%);
        }
</style>

</head>
<body>

<h1>Permohonan Informasi</h1>
<a class="button create-btn" href="submitForm.php">Buat Pengajuan</a>
<table id="dataTable" border="1">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Kontak</th>
            <th>Rincian Informasi</th>
            <th>Tujuan Penggunaan</th>
            <th>Cara Memperoleh</th>
            <th>Cara Mendapatkan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <!-- Data will be inserted here via AJAX -->
    </tbody>
</table>

</body>
</html>
