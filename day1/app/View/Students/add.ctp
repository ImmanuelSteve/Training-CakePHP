<?php 
/* 
 * simpan di app/View/students/add.ctp 
 */
?>
<h2>Tambah Siswa</h2>
<p>
<?php
echo $this->Html->link('Kembali', array('action'=>'index'));
?>
</p>
<?php
echo $this->Form->create('Student', array('action'=>'add', 
									'enctype' => 'multipart/form-data'));

echo $this->Form->input('nim', array('label' => 'NIM:'));
echo $this->Form->input('nama', array('label' => 'Nama Siswa:'));
echo $this->Form->input('prodi_id', array(
						'label' => 'Program Studi:',
						'type' => 'select',
						'options' => $prodis
					));
echo $this->Form->input('photo', array('label'=>'Foto Siswa:', 'type' => 'file'));
					
echo $this->Form->end('Simpan');
?>