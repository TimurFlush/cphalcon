
extern zend_class_entry *phalcon_http_jwt_token_abstractitem_ce;

ZEPHIR_INIT_CLASS(Phalcon_Http_JWT_Token_AbstractItem);

PHP_METHOD(Phalcon_Http_JWT_Token_AbstractItem, getEncoded);
zend_object *zephir_init_properties_Phalcon_Http_JWT_Token_AbstractItem(zend_class_entry *class_type TSRMLS_DC);

#if PHP_VERSION_ID >= 70200
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_http_jwt_token_abstractitem_getencoded, 0, 0, IS_STRING, 0)
#else
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_http_jwt_token_abstractitem_getencoded, 0, 0, IS_STRING, NULL, 0)
#endif
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(phalcon_http_jwt_token_abstractitem_method_entry) {
	PHP_ME(Phalcon_Http_JWT_Token_AbstractItem, getEncoded, arginfo_phalcon_http_jwt_token_abstractitem_getencoded, ZEND_ACC_PUBLIC)
	PHP_FE_END
};