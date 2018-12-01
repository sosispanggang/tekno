@extends ('master')

@section('content')
<div class="ui segment">
    <form action="" class="ui form" method="post">
       
        <h3 class="ui dividing header">Order Printing</h3>
            <div class="field">
                <div class="required field">
                    <label>Nama Pemesan</label>
                    <div class="six wide field">
                        <input type="text" name="name" placeholder="Nama Pemesan">
                    </div>
                </div>
                <div class="required field">
                    <label>Jenis Kertas</label>
                    <div class="six wide field">
                    <select name="kertas" class="ui search dropdown" id="kertas">
                    <option value="">Pilih Jenis Kertas</option>
                    <option value="A1">Kertas Ukuran A1</option>
                    <option value="A2">Kertas Ukuran A2</option>
                    <option value="A3">Kertas Ukuran A3</option>
                    <option value="A4">Kertas Ukuran A4</option>
                    <option value="A5">Kertas Ukuran A5</option>
                    <option value="F4">Kertas Ukuran F4</option>
                    </select>
                    </div>
                </div>
                <div class="required field">
                    <label>Alamat Pengiriman</label>
                    <div class="six wide field">
                        <input type="text" name="alamat" placeholder="Alamat Pengiriman">
                    </div>
                </div>
                <div class="required field">
                    <label>No Telp</label>
                    <div class="six wide field">
                        <input type="text" name="no_telp" placeholder="Nomor Telephone">
                    </div>
                </div>

                <div class="required field">
                    <label>Upload Dokumen</label>
                    <div class="six wide field">
                        <button type ="button" class="ui button" onclick="upload();">Upload Dokumen</button>
                        <!-- <input type="text" name="no_telp" placeholder="Nomor Telephone"> -->
                    </div>
                </div>

                <div class="field">
                <button type="button" class="ui primary button">Submit</button>
                </div>
            </div>
            <br>

    </form>
</div>
@endsection

@section('script')
<script>
    const upload = () => {
        $('.ui.modal').modal({
            onDeny: function() {
                $('#uploaddoc').attr('src','');
            },
            onApprove: function() {

            }
        }).modal('show');
    };

    // const readDoc = (input) => {
    //     if (input.file && input.files[0]) {
    //         var reader
    //     }
    // }
</script>

@endsection