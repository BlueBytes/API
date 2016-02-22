<?php
return array(
    'router' => array(
        'routes' => array(),
    ),
    'zf-versioning' => array(
        'uri' => array(),
        'default_version' => 1,
    ),
    'zf-rest' => array(
        'ToesTest\\V2\\Rest\\UserDataStudy\\Controller' => array(
            'listener' => 'ToesTest\\V2\\Rest\\UserDataStudy\\UserDataStudyResource',
            'route_name' => 'toes-test.rest.doctrine.user-data-study',
            'route_identifier_name' => 'user_data_study_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'user_data_study',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '25',
            'page_size_param' => '',
            'entity_class' => 'Application\\Entity\\UserDataStudy',
            'collection_class' => 'ToesTest\\V2\\Rest\\UserDataStudy\\UserDataStudyCollection',
            'service_name' => 'UserDataStudy',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'ToesTest\\V2\\Rest\\UserDataStudy\\Controller' => 'HalJson',
        ),
        'accept-whitelist' => array(),
        'content-type-whitelist' => array(),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'ToesTest\\V2\\Rest\\UserDataStudy\\UserDataStudyCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.user-data-study',
                'is_collection' => '1',
            ),
        ),
    ),
    'zf-apigility' => array(
        'doctrine-connected' => array(),
    ),
    'doctrine-hydrator' => array(
        'ToesTest\\V1\\Rest\\Study\\StudyHydrator' => array(
            'entity_class' => 'Application\\Entity\\Study',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'ToesTest\\V1\\Rest\\User\\UserHydrator' => array(
            'entity_class' => 'Application\\Entity\\User',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'ToesTest\\V1\\Rest\\UserDataLogin\\UserDataLoginHydrator' => array(
            'entity_class' => 'Application\\Entity\\UserDataLogin',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'ToesTest\\V1\\Rest\\UserDataFinancial\\UserDataFinancialHydrator' => array(
            'entity_class' => 'Application\\Entity\\UserDataFinancial',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'ToesTest\\V1\\Rest\\Album\\AlbumHydrator' => array(
            'entity_class' => 'Application\\Entity\\Album',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'ToesTest\\V1\\Rest\\MenuMain\\MenuMainHydrator' => array(
            'entity_class' => 'Application\\Entity\\MenuMain',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'ToesTest\\V1\\Rest\\Institute\\InstituteHydrator' => array(
            'entity_class' => 'Application\\Entity\\Institute',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'ToesTest\\V1\\Rest\\UserDataStudy\\UserDataStudyHydrator' => array(
            'entity_class' => 'Application\\Entity\\UserDataStudy',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
    ),
    'zf-content-validation' => array(
        'ToesTest\\V2\\Rest\\UserDataStudy\\Controller' => array(
            'input_filter' => 'ToesTest\\V2\\Rest\\UserDataStudy\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'ToesTest\\V2\\Rest\\Study\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '255',
                        ),
                    ),
                ),
            ),
        ),
        'ToesTest\\V2\\Rest\\User\\Validator' => array(
            0 => array(
                'name' => 'email',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'type',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'ToesTest\\V2\\Rest\\UserDataLogin\\Validator' => array(
            0 => array(
                'name' => 'locked',
                'required' => '1',
                'filters' => array(),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'lockExpire',
                'required' => '',
                'filters' => array(),
                'validators' => array(),
            ),
            2 => array(
                'name' => 'protected',
                'required' => '1',
                'filters' => array(),
                'validators' => array(),
            ),
            3 => array(
                'name' => 'passwordHash',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            4 => array(
                'name' => 'lastLogin',
                'required' => '',
                'filters' => array(),
                'validators' => array(),
            ),
            5 => array(
                'name' => 'failedLogins',
                'required' => '1',
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'ToesTest\\V2\\Rest\\UserDataFinancial\\Validator' => array(),
        'ToesTest\\V2\\Rest\\Album\\Validator' => array(
            0 => array(
                'name' => 'artist',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'title',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'ToesTest\\V2\\Rest\\MenuMain\\Validator' => array(
            0 => array(
                'name' => 'title',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '50',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'order',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            2 => array(
                'name' => 'route',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '255',
                        ),
                    ),
                ),
            ),
        ),
        'ToesTest\\V2\\Rest\\Institute\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'short',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '50',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'studentnumberPrefix',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '3',
                        ),
                    ),
                ),
            ),
        ),
        'ToesTest\\V2\\Rest\\UserDataStudy\\Validator' => array(
            0 => array(
                'name' => 'studentNumber',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
        ),
    ),
);
