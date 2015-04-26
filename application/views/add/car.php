<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
echo form_open('add/car');
?>

<label for="Marka">Марка</label>
<input type="text" name="marka" value="<?php echo set_value('marka'); ?>" placeholder = "Введите марку машины"/>
<?php echo form_error('marka'); ?></br>

<label for="Passengers">Число пассажиров</label>
<input type="text" name="passengers" value="<?php echo set_value('passengers'); ?>" placeholder = "Введите число пассажиров вмешаемы в машину"/>
<?php echo form_error('passengers'); ?></br>

<label for="Gos_Num">Гос. номер</label>
<input type="text" name="gos_Num" value="<?php echo set_value('gos_Num'); ?>" placeholder = "Введите гос. номер машины"/>
<?php echo form_error('gos_Num'); ?></br>

<label for="Color">Цвет</label>
<input type="text" name="color" value="<?php echo set_value('color'); ?>" placeholder = "Введите цвет машины"/>
<?php echo form_error('color'); ?></br>

<label for="TypeCar">Выберите тип машины</label>
<?PHP echo form_dropdown('typeCar', $AllCar); ?>
<?php echo form_error('typeCar'); ?></br>

<div><input type="submit" value="Добавить" /></div>
</form>