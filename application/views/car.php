<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
echo form_open($url_form);
?>

<label for="Marka">Марка</label>
<input type="text" name="marka" value="<?php echo set_value('marka', $Marka); ?>" placeholder = "Введите марку машины"/>
<?php echo form_error('marka'); ?></br>

<label for="Passengers">Число пассажиров</label>
<input type="text" name="passengers" value="<?php echo set_value('passengers', $Passengers); ?>" placeholder = "Введите число пассажиров вмешаемы в машину"/>
<?php echo form_error('passengers'); ?></br>

<label for="GosNum">Гос. номер</label>
<input type="text" name="gosNum" value="<?php echo set_value('gosNum', $Gos_Num); ?>" placeholder = "Введите гос. номер машины"/>
<?php echo form_error('gosNum'); ?></br>

<label for="Color">Цвет</label>
<input type="text" name="color" value="<?php echo set_value('color', $Color); ?>" placeholder = "Введите цвет машины"/>
<?php echo form_error('color'); ?></br>

<label for="TypeCar">Выберите тип машины</label>
<?PHP echo form_dropdown('typeCar', $AllCar, set_value('typeCar', $Type_Car)); ?>
<?php echo form_error('typeCar'); ?></br>

<div><input type="submit" value="Сохранить" /></div>
</form>