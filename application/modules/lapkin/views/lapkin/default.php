<div class="row">
	<div class="col-md-12">
		<?php if($this->session->flashdata('flashconfirm')): ?>
		<div class="alert alert-success alert-dismissable">
		  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		  <i class="icon fa fa-check"></i> Sukses! <?php echo $this->session->flashdata('flashconfirm'); ?>.
		</div>
		<?php endif; ?>
		<?php if($this->session->flashdata('flasherror')): ?>
		<div class="alert alert-info alert-dismissable">
		  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		  <i class="icon fa fa-info"></i> Perhatian! <?php echo $this->session->flashdata('flasherror'); ?>.
		</div>
		<?php endif; ?>
		<div class="box box-success box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?= isset($head) ? $head : ''; ?></h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<!-- box-body -->
			<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<p>Selamat Datang Di Halaman E-Lapkin</p>
						<p>E-Lapkin merupakan bagian modul dari simpeg, yang diperuntukan laporan kinerja pegawai yang di akses oleh setiap SOPD yang ada di lingkungan provinsi Kalimantan Selatan. Untuk menggunakannya petugas di SOPD dapat melakukan upload terhadap file excel e-lapkin yang formatnya sudah baku seperti dokumen berikut ini <a href="<?= base_url('document/e-lapkin/e-lapkin.xlsx'); ?>" download>download</a></p>
						<p>Untuk upload file excel pada halaman ini <a href="<?= site_url('lapkin/created'); ?>" class="btn btn-xs btn-primary"><i class="fa fa-upload"></i> Upload Dokumen</a></p>
						<p>IT Data dan Informasi</p>
					</div>
				</div>
				<?php if($record): ?>
				<div class="row">
					<div class="col-md-12">
						<span id="key" style="display: none;"><?= $this->security->get_csrf_hash(); ?></span>
						<table id="tableID" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Nama Lengkap</th>
									<th>NIP</th>
									<th>Jabatan</th>
									<th>Unit Kerja</th>
									<th>Satuan Kerja</th>
									<th>SKP</th>
									<th>P</th>
									<th>I</th>
									<th>K</th>
									<th>D</th>
									<th>K</th>
									<th>K</th>
									<th>Tahun</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
				</div>
				<?php endif; ?>
			</div>
			<!-- ./box-body -->
			
			<div class="box-footer">
				<div class="row">
					<div class="col-md-12">

					</div>
				</div>
			</div>
		</div>
	</div>
</div>