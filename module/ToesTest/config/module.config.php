<?php
return array(
    'router' => array(
        'routes' => array(
            'toes-test.rest.doctrine.user' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/user[/:user_id]',
                    'defaults' => array(
                        'controller' => 'ToesTest\\V1\\Rest\\User\\Controller',
                    ),
                ),
            ),
            'toes-test.rest.doctrine.calendar-category' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/calendar-category[/:calendar_category_id]',
                    'defaults' => array(
                        'controller' => 'ToesTest\\V1\\Rest\\CalendarCategory\\Controller',
                    ),
                ),
            ),
            'toes-test.rest.doctrine.group-category' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/group-category[/:group_category_id]',
                    'defaults' => array(
                        'controller' => 'ToesTest\\V1\\Rest\\GroupCategory\\Controller',
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
            'toes-test.rest.doctrine.study' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/study[/:study_id]',
                    'defaults' => array(
                        'controller' => 'ToesTest\\V1\\Rest\\Study\\Controller',
                    ),
                ),
            ),
            'toes-test.rest.doctrine.user-group' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/user-group[/:user_group_id]',
                    'defaults' => array(
                        'controller' => 'ToesTest\\V1\\Rest\\UserGroup\\Controller',
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
            'toes-test.rest.doctrine.group-function' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/group-function[/:group_function_id]',
                    'defaults' => array(
                        'controller' => 'ToesTest\\V1\\Rest\\GroupFunction\\Controller',
                    ),
                ),
            ),
            'toes-test.rest.doctrine.calendar-event' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/calendar-event[/:calendar_event_id]',
                    'defaults' => array(
                        'controller' => 'ToesTest\\V1\\Rest\\CalendarEvent\\Controller',
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
            'toes-test.rest.doctrine.user-data-personal' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/user-data-personal[/:user_data_personal_id]',
                    'defaults' => array(
                        'controller' => 'ToesTest\\V1\\Rest\\UserDataPersonal\\Controller',
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
            'toes-test.rest.doctrine.group' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/group[/:group_id]',
                    'defaults' => array(
                        'controller' => 'ToesTest\\V1\\Rest\\Group\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'toes-test.rest.doctrine.user',
            1 => 'toes-test.rest.doctrine.calendar-category',
            2 => 'toes-test.rest.doctrine.group-category',
            3 => 'toes-test.rest.doctrine.institute',
            4 => 'toes-test.rest.doctrine.study',
            5 => 'toes-test.rest.doctrine.user-group',
            6 => 'toes-test.rest.doctrine.user-data-study',
            7 => 'toes-test.rest.doctrine.group-function',
            8 => 'toes-test.rest.doctrine.calendar-event',
            9 => 'toes-test.rest.doctrine.user-data-financial',
            10 => 'toes-test.rest.doctrine.user-data-personal',
            11 => 'toes-test.rest.doctrine.user-data-login',
            12 => 'toes-test.rest.doctrine.group-category',
            13 => 'toes-test.rest.doctrine.group-function',
            14 => 'toes-test.rest.doctrine.institute',
            15 => 'toes-test.rest.doctrine.group',
            16 => 'toes-test.rest.doctrine.user-data-study',
            17 => 'toes-test.rest.doctrine.user-group',
        ),
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
        'ToesTest\\V1\\Rest\\GroupCategory\\Controller' => array(
            'listener' => 'ToesTest\\V1\\Rest\\GroupCategory\\GroupCategoryResource',
            'route_name' => 'toes-test.rest.doctrine.group-category',
            'route_identifier_name' => 'group_category_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'group_category',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'GET',
                5 => 'PATCH',
                6 => 'PUT',
                7 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
                2 => 'GET',
                3 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Application\\Entity\\GroupCategory',
            'collection_class' => 'ToesTest\\V1\\Rest\\GroupCategory\\GroupCategoryCollection',
            'service_name' => 'GroupCategory',
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
                4 => 'GET',
                5 => 'PATCH',
                6 => 'PUT',
                7 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
                2 => 'GET',
                3 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Application\\Entity\\Institute',
            'collection_class' => 'ToesTest\\V1\\Rest\\Institute\\InstituteCollection',
            'service_name' => 'Institute',
        ),
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
        'ToesTest\\V1\\Rest\\GroupFunction\\Controller' => array(
            'listener' => 'ToesTest\\V1\\Rest\\GroupFunction\\GroupFunctionResource',
            'route_name' => 'toes-test.rest.doctrine.group-function',
            'route_identifier_name' => 'group_function_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'group_function',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'GET',
                5 => 'PATCH',
                6 => 'PUT',
                7 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
                2 => 'GET',
                3 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Application\\Entity\\GroupFunction',
            'collection_class' => 'ToesTest\\V1\\Rest\\GroupFunction\\GroupFunctionCollection',
            'service_name' => 'GroupFunction',
        ),
        'ToesTest\\V1\\Rest\\CalendarEvent\\Controller' => array(
            'listener' => 'ToesTest\\V1\\Rest\\CalendarEvent\\CalendarEventResource',
            'route_name' => 'toes-test.rest.doctrine.calendar-event',
            'route_identifier_name' => 'calendar_event_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'calendar_event',
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
            'entity_class' => 'Application\\Entity\\CalendarEvent',
            'collection_class' => 'ToesTest\\V1\\Rest\\CalendarEvent\\CalendarEventCollection',
            'service_name' => 'CalendarEvent',
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
        'ToesTest\\V1\\Rest\\UserDataPersonal\\Controller' => array(
            'listener' => 'ToesTest\\V1\\Rest\\UserDataPersonal\\UserDataPersonalResource',
            'route_name' => 'toes-test.rest.doctrine.user-data-personal',
            'route_identifier_name' => 'user_data_personal_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'user_data_personal',
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
            'entity_class' => 'Application\\Entity\\UserDataPersonal',
            'collection_class' => 'ToesTest\\V1\\Rest\\UserDataPersonal\\UserDataPersonalCollection',
            'service_name' => 'UserDataPersonal',
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
        'ToesTest\\V1\\Rest\\Group\\Controller' => array(
            'listener' => 'ToesTest\\V1\\Rest\\Group\\GroupResource',
            'route_name' => 'toes-test.rest.doctrine.group',
            'route_identifier_name' => 'group_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'group',
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
            'entity_class' => 'Application\\Entity\\Group',
            'collection_class' => 'ToesTest\\V1\\Rest\\Group\\GroupCollection',
            'service_name' => 'Group',
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
        'ToesTest\\V1\\Rest\\UserGroup\\Controller' => array(
            'listener' => 'ToesTest\\V1\\Rest\\UserGroup\\UserGroupResource',
            'route_name' => 'toes-test.rest.doctrine.user-group',
            'route_identifier_name' => 'user_group_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'user_group',
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
            'entity_class' => 'Application\\Entity\\UserGroup',
            'collection_class' => 'ToesTest\\V1\\Rest\\UserGroup\\UserGroupCollection',
            'service_name' => 'UserGroup',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'ToesTest\\V2\\Rest\\UserDataStudy\\Controller' => 'HalJson',
            'ToesTest\\V1\\Rest\\GroupCategory\\Controller' => 'HalJson',
            'ToesTest\\V1\\Rest\\Institute\\Controller' => 'HalJson',
            'ToesTest\\V1\\Rest\\Study\\Controller' => 'HalJson',
            'ToesTest\\V1\\Rest\\GroupFunction\\Controller' => 'HalJson',
            'ToesTest\\V1\\Rest\\CalendarEvent\\Controller' => 'HalJson',
            'ToesTest\\V1\\Rest\\UserDataPersonal\\Controller' => 'HalJson',
            'ToesTest\\V1\\Rest\\UserDataLogin\\Controller' => 'HalJson',
            'ToesTest\\V1\\Rest\\Group\\Controller' => 'HalJson',
            'ToesTest\\V1\\Rest\\UserDataStudy\\Controller' => 'HalJson',
            'ToesTest\\V1\\Rest\\UserGroup\\Controller' => 'HalJson',
        ),
        'accept-whitelist' => array(
            'ToesTest\\V1\\Rest\\GroupCategory\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
                3 => 'application/vnd.toes-test.v1+json',
                4 => 'application/hal+json',
                5 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\Institute\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
                3 => 'application/vnd.toes-test.v1+json',
                4 => 'application/hal+json',
                5 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\Study\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\GroupFunction\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
                3 => 'application/vnd.toes-test.v1+json',
                4 => 'application/hal+json',
                5 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\CalendarEvent\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\UserDataPersonal\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\UserDataLogin\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\Group\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\UserDataStudy\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\UserGroup\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content-type-whitelist' => array(
            'ToesTest\\V1\\Rest\\GroupCategory\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/json',
                2 => 'application/vnd.toes-test.v1+json',
                3 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\Institute\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/json',
                2 => 'application/vnd.toes-test.v1+json',
                3 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\Study\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\GroupFunction\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/json',
                2 => 'application/vnd.toes-test.v1+json',
                3 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\CalendarEvent\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\UserDataPersonal\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\UserDataLogin\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\Group\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\UserDataStudy\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/json',
            ),
            'ToesTest\\V1\\Rest\\UserGroup\\Controller' => array(
                0 => 'application/vnd.toes-test.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'ToesTest\\V2\\Rest\\UserDataStudy\\UserDataStudyCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.user-data-study',
                'is_collection' => '1',
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
            'Application\\Entity\\GroupFunction' => array(
                'route_identifier_name' => 'group_function_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.group-function',
                'hydrator' => 'ToesTest\\V1\\Rest\\GroupFunction\\GroupFunctionHydrator',
            ),
            'ToesTest\\V1\\Rest\\GroupFunction\\GroupFunctionCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.group-function',
                'is_collection' => true,
            ),
            'Application\\Entity\\CalendarEvent' => array(
                'route_identifier_name' => 'calendar_event_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.calendar-event',
                'hydrator' => 'ToesTest\\V1\\Rest\\CalendarEvent\\CalendarEventHydrator',
            ),
            'ToesTest\\V1\\Rest\\CalendarEvent\\CalendarEventCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.calendar-event',
                'is_collection' => true,
            ),
            'Application\\Entity\\UserDataPersonal' => array(
                'route_identifier_name' => 'user_data_personal_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.user-data-personal',
                'hydrator' => 'ToesTest\\V1\\Rest\\UserDataPersonal\\UserDataPersonalHydrator',
            ),
            'ToesTest\\V1\\Rest\\UserDataPersonal\\UserDataPersonalCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.user-data-personal',
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
            'Application\\Entity\\GroupCategory' => array(
                'route_identifier_name' => 'group_category_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.group-category',
                'hydrator' => 'ToesTest\\V1\\Rest\\GroupCategory\\GroupCategoryHydrator',
            ),
            'ToesTest\\V1\\Rest\\GroupCategory\\GroupCategoryCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.group-category',
                'is_collection' => true,
            ),
            'Application\\Entity\\Group' => array(
                'route_identifier_name' => 'group_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.group',
                'hydrator' => 'ToesTest\\V1\\Rest\\Group\\GroupHydrator',
            ),
            'ToesTest\\V1\\Rest\\Group\\GroupCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.group',
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
            'Application\\Entity\\UserGroup' => array(
                'route_identifier_name' => 'user_group_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.user-group',
                'hydrator' => 'ToesTest\\V1\\Rest\\UserGroup\\UserGroupHydrator',
            ),
            'ToesTest\\V1\\Rest\\UserGroup\\UserGroupCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'toes-test.rest.doctrine.user-group',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'doctrine-connected' => array(
            'ToesTest\\V1\\Rest\\User\\UserResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ToesTest\\V1\\Rest\\User\\UserHydrator',
            ),
            'ToesTest\\V1\\Rest\\CalendarCategory\\CalendarCategoryResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ToesTest\\V1\\Rest\\CalendarCategory\\CalendarCategoryHydrator',
            ),
            'ToesTest\\V1\\Rest\\Study\\StudyResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ToesTest\\V1\\Rest\\Study\\StudyHydrator',
            ),
            'ToesTest\\V1\\Rest\\MenuMain\\MenuMainResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ToesTest\\V1\\Rest\\MenuMain\\MenuMainHydrator',
            ),
            'ToesTest\\V1\\Rest\\CalendarEvent\\CalendarEventResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ToesTest\\V1\\Rest\\CalendarEvent\\CalendarEventHydrator',
            ),
            'ToesTest\\V1\\Rest\\UserDataFinancial\\UserDataFinancialResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ToesTest\\V1\\Rest\\UserDataFinancial\\UserDataFinancialHydrator',
            ),
            'ToesTest\\V1\\Rest\\UserDataPersonal\\UserDataPersonalResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ToesTest\\V1\\Rest\\UserDataPersonal\\UserDataPersonalHydrator',
            ),
            'ToesTest\\V1\\Rest\\UserDataLogin\\UserDataLoginResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ToesTest\\V1\\Rest\\UserDataLogin\\UserDataLoginHydrator',
            ),
            'ToesTest\\V1\\Rest\\GroupCategory\\GroupCategoryResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ToesTest\\V1\\Rest\\GroupCategory\\GroupCategoryHydrator',
            ),
            'ToesTest\\V1\\Rest\\GroupFunction\\GroupFunctionResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ToesTest\\V1\\Rest\\GroupFunction\\GroupFunctionHydrator',
            ),
            'ToesTest\\V1\\Rest\\Institute\\InstituteResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ToesTest\\V1\\Rest\\Institute\\InstituteHydrator',
            ),
            'ToesTest\\V1\\Rest\\Group\\GroupResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ToesTest\\V1\\Rest\\Group\\GroupHydrator',
            ),
            'ToesTest\\V1\\Rest\\UserDataStudy\\UserDataStudyResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ToesTest\\V1\\Rest\\UserDataStudy\\UserDataStudyHydrator',
            ),
            'ToesTest\\V1\\Rest\\UserGroup\\UserGroupResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'ToesTest\\V1\\Rest\\UserGroup\\UserGroupHydrator',
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
        'ToesTest\\V1\\Rest\\CalendarCategory\\CalendarCategoryHydrator' => array(
            'entity_class' => 'Application\\Entity\\CalendarCategory',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'ToesTest\\V1\\Rest\\CalendarEvent\\CalendarEventHydrator' => array(
            'entity_class' => 'Application\\Entity\\CalendarEvent',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'ToesTest\\V1\\Rest\\UserDataPersonal\\UserDataPersonalHydrator' => array(
            'entity_class' => 'Application\\Entity\\UserDataPersonal',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'ToesTest\\V1\\Rest\\GroupCategory\\GroupCategoryHydrator' => array(
            'entity_class' => 'Application\\Entity\\GroupCategory',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'ToesTest\\V1\\Rest\\GroupFunction\\GroupFunctionHydrator' => array(
            'entity_class' => 'Application\\Entity\\GroupFunction',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'ToesTest\\V1\\Rest\\Group\\GroupHydrator' => array(
            'entity_class' => 'Application\\Entity\\Group',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'ToesTest\\V1\\Rest\\UserGroup\\UserGroupHydrator' => array(
            'entity_class' => 'Application\\Entity\\UserGroup',
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
        'ToesTest\\V1\\Rest\\GroupCategory\\Controller' => array(
            'input_filter' => 'ToesTest\\V1\\Rest\\GroupCategory\\Validator',
        ),
        'ToesTest\\V1\\Rest\\User\\Controller' => array(
            'input_filter' => 'ToesTest\\V1\\Rest\\User\\Validator',
        ),
        'ToesTest\\V1\\Rest\\Institute\\Controller' => array(
            'input_filter' => 'ToesTest\\V1\\Rest\\Institute\\Validator',
        ),
        'ToesTest\\V1\\Rest\\Study\\Controller' => array(
            'input_filter' => 'ToesTest\\V1\\Rest\\Study\\Validator',
        ),
        'ToesTest\\V1\\Rest\\GroupFunction\\Controller' => array(
            'input_filter' => 'ToesTest\\V1\\Rest\\GroupFunction\\Validator',
        ),
        'ToesTest\\V1\\Rest\\UserDataFinancial\\Controller' => array(
            'input_filter' => 'ToesTest\\V1\\Rest\\UserDataFinancial\\Validator',
        ),
        'ToesTest\\V1\\Rest\\UserDataLogin\\Controller' => array(
            'input_filter' => 'ToesTest\\V1\\Rest\\UserDataLogin\\Validator',
        ),
        'ToesTest\\V1\\Rest\\Group\\Controller' => array(
            'input_filter' => 'ToesTest\\V1\\Rest\\Group\\Validator',
        ),
        'ToesTest\\V1\\Rest\\UserDataStudy\\Controller' => array(
            'input_filter' => 'ToesTest\\V1\\Rest\\UserDataStudy\\Validator',
        ),
        'ToesTest\\V1\\Rest\\UserGroup\\Controller' => array(
            'input_filter' => 'ToesTest\\V1\\Rest\\UserGroup\\Validator',
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
        'ToesTest\\V1\\Rest\\GroupCategory\\Validator' => array(
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
        'ToesTest\\V1\\Rest\\GroupFunction\\Validator' => array(
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
        'ToesTest\\V1\\Rest\\UserDataFinancial\\Validator' => array(
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
                            'max' => 50,
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'place',
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
                'name' => 'iban',
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
                            'max' => 30,
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'bic',
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
                            'max' => 10,
                        ),
                    ),
                ),
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
        'ToesTest\\V1\\Rest\\Group\\Validator' => array(
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
        'ToesTest\\V1\\Rest\\UserGroup\\Validator' => array(
            0 => array(
                'name' => 'start',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'end',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
    ),
);
