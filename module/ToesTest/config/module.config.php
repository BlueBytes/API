<?php
return array(
    'router' => array(
        'routes' => array(
            'toes-test.rest.doctrine.study' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/study[/:study_id]',
                    'defaults' => array(
                        'controller' => 'ToesTest\\V1\\Rest\\Study\\Controller',
                    ),
                ),
            ),
            'toes-test.rest.doctrine.user' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/user[/:user_id]',
                    'defaults' => array(
                        'controller' => 'ToesTest\\V1\\Rest\\User\\Controller',
                    ),
                ),
            ),
            'toes-test.rest.doctrine.user-data-login' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/user-data-login[/:user_data_login_id]',
                    'defaults' => array(
                        'controller' => 'ToesTest\\V1\\Rest\\UserDataLogin\\Controller',
                    ),
                ),
            ),
            'toes-test.rest.doctrine.user-data-financial' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/user-data-financial[/:user_data_financial_id]',
                    'defaults' => array(
                        'controller' => 'ToesTest\\V1\\Rest\\UserDataFinancial\\Controller',
                    ),
                ),
            ),
            'toes-test.rest.doctrine.album' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/album[/:album_id]',
                    'defaults' => array(
                        'controller' => 'ToesTest\\V1\\Rest\\Album\\Controller',
                    ),
                ),
            ),
            'toes-test.rest.doctrine.menu-main' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/menu-main[/:menu_main_id]',
                    'defaults' => array(
                        'controller' => 'ToesTest\\V1\\Rest\\MenuMain\\Controller',
                    ),
                ),
            ),
            'toes-test.rest.doctrine.institute' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/institute[/:institute_id]',
                    'defaults' => array(
                        'controller' => 'ToesTest\\V1\\Rest\\Institute\\Controller',
                    ),
                ),
            ),
            'toes-test.rest.doctrine.user-data-study' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/user-data-study[/:user_data_study_id]',
                    'defaults' => array(
                        'controller' => 'ToesTest\\V1\\Rest\\UserDataStudy\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'toes-test.rest.doctrine.study',
            1 => 'toes-test.rest.doctrine.user',
            2 => 'toes-test.rest.doctrine.user-data-login',
            3 => 'toes-test.rest.doctrine.user-data-financial',
            4 => 'toes-test.rest.doctrine.album',
            5 => 'toes-test.rest.doctrine.menu-main',
            6 => 'toes-test.rest.doctrine.institute',
            7 => 'toes-test.rest.doctrine.user-data-study',
        ),
    ),
    'zf-rest' => array(
        'ToesTest\\V1\\Rest\\Study\\Controller' => array(
            'listener' => 'ToesTest\\V1\\Rest\\Study\\StudyResource',
            'route_name' => 'toes-test.rest.doctrine.study',
            'route_identifier_name' => 'study_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'study',
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
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Application\\Entity\\Study',
            'collection_class' => 'ToesTest\\V1\\Rest\\Study\\StudyCollection',
            'service_name' => 'Study',
        ),
        'ToesTest\\V1\\Rest\\User\\Controller' => array(
            'listener' => 'ToesTest\\V1\\Rest\\User\\UserResource',
            'route_name' => 'toes-test.rest.doctrine.user',
            'route_identifier_name' => 'user_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'user',
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
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Application\\Entity\\User',
            'collection_class' => 'ToesTest\\V1\\Rest\\User\\UserCollection',
            'service_name' => 'User',
        ),
        'ToesTest\\V1\\Rest\\UserDataLogin\\Controller' => array(
            'listener' => 'ToesTest\\V1\\Rest\\UserDataLogin\\UserDataLoginResource',
            'route_name' => 'toes-test.rest.doctrine.user-data-login',
            'route_identifier_name' => 'user_data_login_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'user_data_login',
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
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Application\\Entity\\UserDataLogin',
            'collection_class' => 'ToesTest\\V1\\Rest\\UserDataLogin\\UserDataLoginCollection',
            'service_name' => 'UserDataLogin',
        ),
        'ToesTest\\V1\\Rest\\UserDataFinancial\\Controller' => array(
            'listener' => 'ToesTest\\V1\\Rest\\UserDataFinancial\\UserDataFinancialResource',
            'route_name' => 'toes-test.rest.doctrine.user-data-financial',
            'route_identifier_name' => 'user_data_financial_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'user_data_financial',
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
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Application\\Entity\\UserDataFinancial',
            'collection_class' => 'ToesTest\\V1\\Rest\\UserDataFinancial\\UserDataFinancialCollection',
            'service_name' => 'UserDataFinancial',
        ),
        'ToesTest\\V1\\Rest\\Album\\Controller' => array(
            'listener' => 'ToesTest\\V1\\Rest\\Album\\AlbumResource',
            'route_name' => 'toes-test.rest.doctrine.album',
            'route_identifier_name' => 'album_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'album',
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
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Application\\Entity\\Album',
            'collection_class' => 'ToesTest\\V1\\Rest\\Album\\AlbumCollection',
            'service_name' => 'Album',
        ),
        'ToesTest\\V1\\Rest\\MenuMain\\Controller' => array(
            'listener' => 'ToesTest\\V1\\Rest\\MenuMain\\MenuMainResource',
            'route_name' => 'toes-test.rest.doctrine.menu-main',
            'route_identifier_name' => 'menu_main_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'menu_main',
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
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Application\\Entity\\MenuMain',
            'collection_class' => 'ToesTest\\V1\\Rest\\MenuMain\\MenuMainCollection',
            'service_name' => 'MenuMain',
        ),
        'ToesTest\\V1\\Rest\\Institute\\Controller' => array(
            'listener' => 'ToesTest\\V1\\Rest\\Institute\\InstituteResource',
            'route_name' => 'toes-test.rest.doctrine.institute',
            'route_identifier_name' => 'institute_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'institute',
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
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Application\\Entity\\Institute',
            'collection_class' => 'ToesTest\\V1\\Rest\\Institute\\InstituteCollection',
            'service_name' => 'Institute',
        ),
        'ToesTest\\V1\\Rest\\UserDataStudy\\Controller' => array(
            'listener' => 'ToesTest\\V1\\Rest\\UserDataStudy\\UserDataStudyResource',
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
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Application\\Entity\\UserDataStudy',
            'collection_class' => 'ToesTest\\V1\\Rest\\UserDataStudy\\UserDataStudyCollection',
            'service_name' => 'UserDataStudy',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'ToesTest\\V1\\Rest\\Study\\Controller' => 'HalJson',
            'ToesTest\\V1\\Rest\\User\\Controller' => 'HalJson',
            'ToesTest\\V1\\Rest\\UserDataLogin\\Controller' => 'HalJson',
            'ToesTest\\V1\\Rest\\UserDataFinancial\\Controller' => 'HalJson',
            'ToesTest\\V1\\Rest\\Album\\Controller' => 'HalJson',
            'ToesTest\\V1\\Rest\\MenuMain\\Controller' => 'HalJson',
            'ToesTest\\V1\\Rest\\Institute\\Controller' => 'HalJson',
            'ToesTest\\V1\\Rest\\UserDataStudy\\Controller' => 'HalJson',
        ),
        'accept-whitelist' => array(
            'ToesTest\\V1\\Rest\\Study\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\User\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\UserDataLogin\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\UserDataFinancial\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\Album\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\MenuMain\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\Institute\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\UserDataStudy\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content-type-whitelist' => array(
            'ToesTest\\V1\\Rest\\Study\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\User\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\UserDataLogin\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\UserDataFinancial\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\Album\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\MenuMain\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\Institute\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\UserDataStudy\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Application\\Entity\\Study' => array(
                'route_identifier_name' => 'study_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.study',
                'hydrator' => 'ToesTest\\V1\\Rest\\Study\\StudyHydrator',
            ),
            'ToesTest\\V1\\Rest\\Study\\StudyCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.study',
                'is_collection' => true,
            ),
            'Application\\Entity\\User' => array(
                'route_identifier_name' => 'user_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.user',
                'hydrator' => 'ToesTest\\V1\\Rest\\User\\UserHydrator',
            ),
            'ToesTest\\V1\\Rest\\User\\UserCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.user',
                'is_collection' => true,
            ),
            'Application\\Entity\\UserDataLogin' => array(
                'route_identifier_name' => 'user_data_login_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.user-data-login',
                'hydrator' => 'ToesTest\\V1\\Rest\\UserDataLogin\\UserDataLoginHydrator',
            ),
            'ToesTest\\V1\\Rest\\UserDataLogin\\UserDataLoginCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.user-data-login',
                'is_collection' => true,
            ),
            'Application\\Entity\\UserDataFinancial' => array(
                'route_identifier_name' => 'user_data_financial_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.user-data-financial',
                'hydrator' => 'ToesTest\\V1\\Rest\\UserDataFinancial\\UserDataFinancialHydrator',
            ),
            'ToesTest\\V1\\Rest\\UserDataFinancial\\UserDataFinancialCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.user-data-financial',
                'is_collection' => true,
            ),
            'Application\\Entity\\Album' => array(
                'route_identifier_name' => 'album_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.album',
                'hydrator' => 'ToesTest\\V1\\Rest\\Album\\AlbumHydrator',
            ),
            'ToesTest\\V1\\Rest\\Album\\AlbumCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.album',
                'is_collection' => true,
            ),
            'Application\\Entity\\MenuMain' => array(
                'route_identifier_name' => 'menu_main_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.menu-main',
                'hydrator' => 'ToesTest\\V1\\Rest\\MenuMain\\MenuMainHydrator',
            ),
            'ToesTest\\V1\\Rest\\MenuMain\\MenuMainCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.menu-main',
                'is_collection' => true,
            ),
            'Application\\Entity\\Institute' => array(
                'route_identifier_name' => 'institute_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.institute',
                'hydrator' => 'ToesTest\\V1\\Rest\\Institute\\InstituteHydrator',
            ),
            'ToesTest\\V1\\Rest\\Institute\\InstituteCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.institute',
                'is_collection' => true,
            ),
            'Application\\Entity\\UserDataStudy' => array(
                'route_identifier_name' => 'user_data_study_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.user-data-study',
                'hydrator' => 'ToesTest\\V1\\Rest\\UserDataStudy\\UserDataStudyHydrator',
            ),
            'ToesTest\\V1\\Rest\\UserDataStudy\\UserDataStudyCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.user-data-study',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'doctrine-connected' => array(
            'ToesTest\\V1\\Rest\\Study\\StudyResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ToesTest\\V1\\Rest\\Study\\StudyHydrator',
            ),
            'ToesTest\\V1\\Rest\\User\\UserResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ToesTest\\V1\\Rest\\User\\UserHydrator',
            ),
            'ToesTest\\V1\\Rest\\UserDataLogin\\UserDataLoginResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ToesTest\\V1\\Rest\\UserDataLogin\\UserDataLoginHydrator',
            ),
            'ToesTest\\V1\\Rest\\UserDataFinancial\\UserDataFinancialResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ToesTest\\V1\\Rest\\UserDataFinancial\\UserDataFinancialHydrator',
            ),
            'ToesTest\\V1\\Rest\\Album\\AlbumResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ToesTest\\V1\\Rest\\Album\\AlbumHydrator',
            ),
            'ToesTest\\V1\\Rest\\MenuMain\\MenuMainResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ToesTest\\V1\\Rest\\MenuMain\\MenuMainHydrator',
            ),
            'ToesTest\\V1\\Rest\\Institute\\InstituteResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ToesTest\\V1\\Rest\\Institute\\InstituteHydrator',
            ),
            'ToesTest\\V1\\Rest\\UserDataStudy\\UserDataStudyResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ToesTest\\V1\\Rest\\UserDataStudy\\UserDataStudyHydrator',
            ),
        ),
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
        'ToesTest\\V1\\Rest\\Study\\Controller' => array(
            'input_filter' => 'ToesTest\\V1\\Rest\\Study\\Validator',
        ),
        'ToesTest\\V1\\Rest\\User\\Controller' => array(
            'input_filter' => 'ToesTest\\V1\\Rest\\User\\Validator',
        ),
        'ToesTest\\V1\\Rest\\UserDataLogin\\Controller' => array(
            'input_filter' => 'ToesTest\\V1\\Rest\\UserDataLogin\\Validator',
        ),
        'ToesTest\\V1\\Rest\\UserDataFinancial\\Controller' => array(
            'input_filter' => 'ToesTest\\V1\\Rest\\UserDataFinancial\\Validator',
        ),
        'ToesTest\\V1\\Rest\\Album\\Controller' => array(
            'input_filter' => 'ToesTest\\V1\\Rest\\Album\\Validator',
        ),
        'ToesTest\\V1\\Rest\\MenuMain\\Controller' => array(
            'input_filter' => 'ToesTest\\V1\\Rest\\MenuMain\\Validator',
        ),
        'ToesTest\\V1\\Rest\\Institute\\Controller' => array(
            'input_filter' => 'ToesTest\\V1\\Rest\\Institute\\Validator',
        ),
        'ToesTest\\V1\\Rest\\UserDataStudy\\Controller' => array(
            'input_filter' => 'ToesTest\\V1\\Rest\\UserDataStudy\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'ToesTest\\V1\\Rest\\Study\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => true,
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
                            'min' => 1,
                            'max' => 255,
                        ),
                    ),
                ),
            ),
        ),
        'ToesTest\\V1\\Rest\\User\\Validator' => array(
            0 => array(
                'name' => 'email',
                'required' => true,
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
                            'min' => 1,
                            'max' => 255,
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'type',
                'required' => true,
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
        'ToesTest\\V1\\Rest\\UserDataLogin\\Validator' => array(
            0 => array(
                'name' => 'locked',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'lockExpire',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
            ),
            2 => array(
                'name' => 'protected',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            3 => array(
                'name' => 'passwordHash',
                'required' => true,
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
                            'min' => 1,
                            'max' => 255,
                        ),
                    ),
                ),
            ),
            4 => array(
                'name' => 'lastLogin',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
            ),
            5 => array(
                'name' => 'failedLogins',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'ToesTest\\V1\\Rest\\UserDataFinancial\\Validator' => array(),
        'ToesTest\\V1\\Rest\\Album\\Validator' => array(
            0 => array(
                'name' => 'artist',
                'required' => true,
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
                'required' => true,
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
        'ToesTest\\V1\\Rest\\MenuMain\\Validator' => array(
            0 => array(
                'name' => 'title',
                'required' => false,
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
                            'min' => 1,
                            'max' => 50,
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'order',
                'required' => true,
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
                'required' => true,
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
                            'min' => 1,
                            'max' => 255,
                        ),
                    ),
                ),
            ),
        ),
        'ToesTest\\V1\\Rest\\Institute\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => true,
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
                            'min' => 1,
                            'max' => 255,
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'short',
                'required' => true,
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
                            'min' => 1,
                            'max' => 50,
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'studentnumberPrefix',
                'required' => true,
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
                            'min' => 1,
                            'max' => 3,
                        ),
                    ),
                ),
            ),
        ),
        'ToesTest\\V1\\Rest\\UserDataStudy\\Validator' => array(
            0 => array(
                'name' => 'studentNumber',
                'required' => true,
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
