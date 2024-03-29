<?php

/**
 * This is the model class for table "form_element_css_properties".
 *
 * The followings are the available columns in table 'form_element_css_properties':
 * @property integer $id
 * @property integer $element_id
 * @property string $form_element
 * @property string $css_property
 * @property integer $css_properties_id
 *
 * The followings are the available model relations:
 * @property CssProperties $cssProperties
 * @property FormElement $element
 * @property FormElementCssPropertiesThemeMapping[] $formElementCssPropertiesThemeMappings
 */
class FormElementCssProperties extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'form_element_css_properties';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('form_element, css_property', 'required'),
			array('element_id, css_properties_id', 'numerical', 'integerOnly'=>true),
			array('form_element, css_property', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, element_id, form_element, css_property, css_properties_id', 'safe', 'on'=>'search'),
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
			'cssProperties' => array(self::BELONGS_TO, 'CssProperties', 'css_properties_id'),
			'element' => array(self::BELONGS_TO, 'FormElement', 'element_id'),
			'formElementCssPropertiesThemeMappings' => array(self::HAS_MANY, 'FormElementCssPropertiesThemeMapping', 'form_element_css_properties_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'element_id' => 'Element',
			'form_element' => 'Form Element',
			'css_property' => 'Css Property',
			'css_properties_id' => 'Css Properties',
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
		$criteria->compare('element_id',$this->element_id);
		$criteria->compare('form_element',$this->form_element,true);
		$criteria->compare('css_property',$this->css_property,true);
		$criteria->compare('css_properties_id',$this->css_properties_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FormElementCssProperties the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
