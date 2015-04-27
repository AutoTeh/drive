<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
echo form_open('add/car');
?>

<label for="Marka">Марка</label>
<input type="text" name="marka" value="<?php echo $marka ?>" placeholder = "Введите марку машины"/>
<?php echo form_error('marka'); ?></br>

<label for="Passengers">Число пассажиров</label>
<input type="text" name="passengers" value="<?php echo $passengers ?>" placeholder = "Введите число пассажиров вмешаемы в машину"/>
<?php echo form_error('passengers'); ?></br>

<label for="GosNum">Гос. номер</label>
<input type="text" name="gosNum" value="<?php echo $gosNum ?>" placeholder = "Введите гос. номер машины"/>
<?php echo form_error('gosNum'); ?></br>

<label for="Color">Цвет</label>
<input type="text" name="color" value="<?php echo $color ?>" placeholder = "Введите цвет машины"/>
<?php echo form_error('color'); ?></br>

<label for="TypeCar">Выберите тип машины</label>
<?PHP echo form_dropdown('typeCar', $AllCar, $typeCar); ?>
<?php echo form_error('typeCar'); ?></br>

<div><input type="submit" value="Изменить" /></div>
</form>