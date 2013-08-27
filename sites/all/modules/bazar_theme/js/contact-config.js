/**
 * Created with JetBrains PhpStorm.
 * User: maxit
 * Date: 7/24/13
 * Time: 9:17 PM
 * To change this template use File | Settings | File Templates.
 */
var CONTACT = (function () {
    return {
    response: 'Thank you. We will respond shortly',

button: {
    elemText: 'Send Message',
    elemClass: 'sendmail alignleft fix-wrap fix-buttom'
    },
name: {
    elemText: "NAME",
    elemClass: 'with-icon fix-wrap'
    },
subject: {
    elemText: '',
    elemType: 'hidden'
    },
email:{
    elemText:"E-MAIL",
    elemClass:"with-icon fix-email fix-wrap span12"
    },
message:{
    elemText:"ENTER YOUR MESSAGE",
    elemClass:"with-icon fix-wrap"
    }
};
}());