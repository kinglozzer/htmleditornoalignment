<?php
/**
 * Add 'no alignment' option when inserting images through 'Insert Media' form
 */
class HtmlEditorField_NoAlignmentExtension extends Extension
{

    public function updateFieldsForImage(&$fields, $url, $file)
    {
        $classNameField = $fields->fieldByName('CSSClass');
        $classes = $classNameField->getSource();
        $classes = array_merge(array('' => _t('HtmlEditorField.CSSCLASSNONE', 'No alignment.')), $classes);
        $classNameField->setSource($classes);
        return $fields;
    }
}
