<form action="{{ route('karyawan.store') }}" method="post">
    {{ csrf_field() }}
    <table cellpadding="8">
        <tr>
            <td>
    <div class="form-group">
        <label for="nama_karyawan">Nama karyawan<td>:</td></label>
        <td><input type="text" name="nama_karyawan" class="form-control" required>
        <p class="text-danger">{{ $errors->first('nama_karyawan')}}</p></td>
    </div>
</tr>
</td>
<tr>
    <td>
    <div class="form-group">
        <label for="jenkel_karyawan">Jenis Kelamin<td>:</td></label>
        <td><input type="radio" name="jenkel_karyawan" value="laki-laki"class="form-control" required>Laki-laki
        <input type="radio" name="jenkel_karyawan" value="perempuan"class="form-control" required>Perempuan
        <p class="text-danger">{{ $errors->first('jenkel_karyawan')}}</p></td>
    </div>
</tr>
</td>
<tr>
    <td>
    <div class="form-group">
        <label for="no_hp_karyawan">No Handphone<td>:</td></label>
        <td><input type="text" name="no_hp_karyawan" class="form-control" required>
        <p class="text-danger">{{ $errors->first('no_hp_karyawan')}}</p></td>
    </div>
</tr>
</td>
<tr>
    <td>
    <div class="form-group">
    <label for="email_karyawan">Email<td>:</td></label>
    <td> <input type="text" name="email_karyawan" class="form-control" required>
        <p class="text-danger">{{ $errors->first('email_karyawan')}}</p></td>
    </div>
</tr>
</td>
<tr>
    <td>
    <div class="form-group">
        <label for="alamat_karyawan">Alamat<td>:</td></label>
        <td><textarea name="alamat_karyawan" class="form-control" required></textarea>
        <p class="text-danger">{{ $errors->first('alamat_karyawan')}}</p></td>
    </div>
</tr>
</td>
    <div class="form-group">
        <button class="btn btn-primary btn-sm">TAMBAH</button>
    </div>
</form>