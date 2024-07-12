<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
    <link rel="stylesheet" type="text/css" href="gridforms/gridforms.css">
    <style>
        input[type="checkbox"]:checked {
            accent-color: blue;
        }
    </style>
</head>
<body>
    
<form class="grid-form">
	<fieldset>
		<legend>Update Time Permission</legend>
		<div data-row-span="2">
			<div data-field-span="1">
				<label>EMPLOYEE ID</label>
				<input type="text">
			</div>
			<div data-field-span="1">
				<label>USER ID</label>
				<input type="text">
			</div>
		</div>
        
        <div data-row-span="1">				
            <div data-field-span="1">
                <label>DEFAULT WORK DAY PERMIT</label>
                <label><input type="checkbox" name="workday" value="Sunday"> Sunday</label><br>
                <label><input type="checkbox" name="workday" value="Monday" checked> Monday</label><br>
                <label><input type="checkbox" name="workday" value="Tuesday" checked> Tuesday</label><br>
                <label><input type="checkbox" name="workday" value="Wednesday" checked> Wednesday</label><br>
                <label><input type="checkbox" name="workday" value="Thursday" checked> Thursday</label><br>
                <label><input type="checkbox" name="workday" value="Friday" checked> Friday</label><br>
                <label><input type="checkbox" name="workday" value="Saturday"> Saturday</label>                    
            </div>
        </div>

        <div data-row-span="2">
                <div data-field-span="1">
                                        
                        <label>TIME PERMIT START</label>
                        <select>
                            <option value="00:00" title="00:00">00:00</option>
                            <option value="01:00" title="01:00">01:00</option>
                            <option value="02:00" title="02:00">02:00</option>
                            <option value="03:00" title="03:00">03:00</option>
                            <option value="04:00" title="04:00">04:00</option>
                            <option value="05:00" title="05:00">05:00</option>
                            <option value="06:00" title="06:00">06:00</option>
                            <option value="07:00" title="07:00">07:00</option>
                            <option value="08:00" title="08:00"selected>08:00</option>
                            <option value="09:00" title="09:00">09:00</option>
                            <option value="10:00" title="10:00">10:00</option>
                            <option value="11:00" title="11:00">11:00</option>
                            <option value="12:00" title="12:00">12:00</option>
                            <option value="13:00" title="13:00">13:00</option>
                            <option value="14:00" title="14:00">14:00</option>
                            <option value="15:00" title="15:00">15:00</option>
                            <option value="16:00" title="16:00">16:00</option>
                            <option value="17:00" title="17:00">17:00</option>
                            <option value="18:00" title="18:00">18:00</option>
                            <option value="19:00" title="19:00">19:00</option>
                            <option value="20:00" title="20:00">20:00</option>
                            <option value="21:00" title="21:00">21:00</option>
                            <option value="22:00" title="22:00">22:00</option>
                            <option value="23:00" title="23:00">23:00</option>                        
                        </select>

                </div>
                <div data-field-span="1">
                                        
                        <label>TIME PERMIT END</label>
                        <select>
                            <option value="00:00" title="00:00">00:00</option>
                            <option value="01:00" title="01:00">01:00</option>
                            <option value="02:00" title="02:00">02:00</option>
                            <option value="03:00" title="03:00">03:00</option>
                            <option value="04:00" title="04:00">04:00</option>
                            <option value="05:00" title="05:00">05:00</option>
                            <option value="06:00" title="06:00">06:00</option>
                            <option value="07:00" title="07:00">07:00</option>
                            <option value="08:00" title="08:00">08:00</option>
                            <option value="09:00" title="09:00">09:00</option>
                            <option value="10:00" title="10:00">10:00</option>
                            <option value="11:00" title="11:00">11:00</option>
                            <option value="12:00" title="12:00">12:00</option>
                            <option value="13:00" title="13:00">13:00</option>
                            <option value="14:00" title="14:00">14:00</option>
                            <option value="15:00" title="15:00">15:00</option>
                            <option value="16:00" title="16:00">16:00</option>
                            <option value="17:00" title="17:00">17:00</option>
                            <option value="18:00" title="18:00">18:00</option>
                            <option value="19:00" title="19:00"selected>19:00</option>
                            <option value="20:00" title="20:00">20:00</option>
                            <option value="21:00" title="21:00">21:00</option>
                            <option value="22:00" title="22:00">22:00</option>
                            <option value="23:00" title="23:00">23:00</option> 
                        </select>
                        
                </div>
		</div>
	</fieldset>
</form>




</body>
</html>