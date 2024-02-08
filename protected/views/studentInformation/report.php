<?php
$controller = Yii::app()->getController();
$actionId = $controller->getAction()->getId();
$controllerId = $controller->getId();

$columns = array('student_id', 'first_name', 'last_name','percentage', 'course_id', 'academic_status');
$StudentInformation = StudentInformation::model()->findAll(); // Assuming StudentInformation is your model

echo CHtml::hiddenField('controllerId', $controllerId);
echo CHtml::hiddenField('actionId', $actionId);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Report</title>
</head>
<body>
    <div class="report-container">
    <h2 class="report-heading">Student Report</h2> <!-- Dynamic Heading -->
        <table class="report-table" id="StudentInformation">
            <thead>
                <tr>
                    <?php foreach($columns as $columnName): ?>
                        <th><?php echo $columnName; ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach($StudentInformation as $student): ?>
                    <tr>
                        <?php foreach($columns as $columnName): ?>
                            <td>
                                <?php switch ($columnName) {
                                    case 'course_id':
                                        $coureName = Courses::model()->findByPk($student[$columnName]);
                                            echo isset($coureName)? $coureName->course_name: 'N/A';
                                        break;
                                    default:
                                        echo $student->$columnName;
                                        break;
                                } ?>
                            </td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
  
<!--                            <script src="<?php echo Yii::app()->baseUrl; ?>/AjaxFiles/effectstest.js"></script>-->

<!--<script>
  function highlightPassFailByMark(markParameter, passColor, failColor) {
    var targetColumnNames = ['percentage'];

    var columnIndices = targetColumnNames.map(function (columnName) {
        return Array.from(document.querySelectorAll('table th')).findIndex(th => th.textContent.trim() === columnName);
    });

    columnIndices.forEach(function (columnIndex) {
        if (columnIndex !== -1) {
            var targetElements = document.querySelectorAll('table td:nth-child(' + (columnIndex + 1) + ')');
            
            targetElements.forEach(function (element) {
                var value = parseInt(element.textContent);
                if (!isNaN(value)) {
                    if (value >= markParameter) {
                        element.style.setProperty('color', passColor, 'important');
                    } else {
                        element.style.setProperty('color', failColor, 'important');
                    }
                }
            });
        } else {
            console.error('Column not found: ' + targetColumnNames.join(', '));
        }
    });
}

// Call the function with desired parameters
highlightPassFailByMark(30, 'green', 'red');


</script>


-->





 
</body>
