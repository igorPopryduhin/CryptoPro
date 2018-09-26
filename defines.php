<?php

const CADES_X_LONG_TYPE_1 = 0x5d;
const CURRENT_USER_STORE = 2;
const STORE_OPEN_READ_ONLY = 0;
const STORE_OPEN_READ_WRITE = 1;
const STORE_OPEN_MAXIMUM_ALLOWED = 2;
const STORE_OPEN_EXISTING_ONLY = 128;
const STORE_OPEN_INCLUDE_ARCHIVED = 256;
const CERTIFICATE_FIND_SUBJECT_NAME = 1;


/**
 * Проверяется только подпись.
 */
const VERIFY_SIGNATURE_ONLY = 0;
/**
 * Проверяется как подпись, так и действительность сертификата, используемого для создания подписи.
 */
const VERIFY_SIGNATURE_AND_CERTIFICATE = 1;



/* CONTENT_ENCODING_TYPE enumeration */

/**
 * Кодировка UTF-8 или UNICODE.
 */
const STRING_TO_UCS2LE = 0x00;
/**
 * Data is saved as a base64-encoded string.
 */
const BASE64_TO_BINARY = 0x01;


/*  CERT_INFO_TYPE enumeration */

/**
 * Returns the display name of the certificate subject.
 */
const CERT_INFO_SUBJECT_SIMPLE_NAME	= 0;
/**
 * Returns the display name of the issuer of the certificate.
 */
const CERT_INFO_ISSUER_SIMPLE_NAME = 1;
/**
 * Returns the email address of the certificate subject.
 */
const CERT_INFO_SUBJECT_EMAIL_NAME = 2;
/**
 * Returns the email address of the issuer of the certificate.
 */
const CERT_INFO_ISSUER_EMAIL_NAME = 3;
/**
 * Returns the UPN of the certificate subject. Introduced in CAPICOM 2.0.
 */
const CERT_INFO_SUBJECT_UPN = 4;
/**
 * Returns the UPN of the issuer of the certificate. Introduced in CAPICOM 2.0.
 */
const CERT_INFO_ISSUER_UPN = 5;
/**
 * Returns the DNS name of the certificate subject. Introduced in CAPICOM 2.0.
 */
const CERT_INFO_SUBJECT_DNS_NAME = 6;
/**
 * Returns the DNS name of the issuer of the certificate. Introduced in CAPICOM 2.0.
 */
const CERT_INFO_ISSUER_DNS_NAME = 7;


