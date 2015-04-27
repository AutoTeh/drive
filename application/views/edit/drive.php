<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
echo form_open('add/drive');
?>

<label for="Fio">ФИО</label>
<input type="text" name="fio" value="<?php echo $fio ?>" placeholder = "Введите ФИО водителя"/>
<?php echo form_error('fio'); ?></br>

<label for="Phone">Телефон</label>
<input type="text" name="phone" value="<?php echo $phone ?>" placeholder = "Введите его телефон"/>
<?php echo form_error('phone'); ?></br>

<label for="AddCar">Выберите машину закрпеленную за ним</label>
<?PHP echo form_dropdown('addCar', $AllCar, $addCar')); ?>
<?php echo form_error('addCar'); ?></br>

<div><input type="submit" value="Изменить" /></div>
</form>