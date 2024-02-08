<?php

/**
 * This is the model class for table "function_library_manager".
 *
 * The followings are the available columns in table 'function_library_manager':
 * @property integer $id
 * @property integer $function_id
 * @property integer $category_id
 * @property integer $subcategory_id
 * @property string $enforcement_date_time
 * @property string $expiry_datetime
 * @property string $creation_date
 * @property integer $status
 * @property integer $group_id
 * @property string $access_id
 * @property string $view_access_id
 * @property string $original_filename
 *
 * The followings are the available model relations:
 * @property FunctionCategory $category
 * @property FunctionSubcategory $subcategory
 */
class FunctionLibraryManager extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'function_library_manager';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('function_id, category_id, subcategory_id, creation_date, status, group_id, access_id, view_access_id, original_filename', 'required'),
			array('function_id, category_id, subcategory_id, status, group_id', 'numerical', 'integerOnly'=>true),
			array('access_id', 'length', 'max'=>11),
			array('view_access_id', 'length', 'max'=>100),
			array('original_filename', 'length', 'max'=>200),
			array('enforcement_date_time, expiry_datetime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, function_id, category_id, subcategory_id, enforcement_date_time, expiry_datetime, creation_date, status, group_id, access_id, view_access_id, original_filename', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'category' => array(self::BELONGS_TO, 'FunctionCategory', 'category_id'),
			'subcategory' => array(self::BELONGS_TO, 'FunctionSubcategory', 'subcategory_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'function_id' => 'Function',
			'category_id' => 'Category',
			'subcategory_id' => 'Subcategory',
			'enforcement_date_time' => 'Enforcement Date Time',
			'expiry_datetime' => 'Expiry Datetime',
			'creation_date' => 'Creation Date',
			'status' => 'Status',
			'group_id' => 'Group',
			'access_id' => 'Access',
			'view_access_id' => 'View Access',
			'original_filename' => 'Original Filename',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('function_id',$this->function_id);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('subcategory_id',$this->subcategory_id);
		$criteria->compare('enforcement_date_time',$this->enforcement_date_time,true);
		$criteria->compare('expiry_datetime',$this->expiry_datetime,true);
		$criteria->compare('creation_date',$this->creation_date,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('access_id',$this->access_id,true);
		$criteria->compare('view_access_id',$this->view_access_id,true);
		$criteria->compare('original_filename',$this->original_filename,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FunctionLibraryManager the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
