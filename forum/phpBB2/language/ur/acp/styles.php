<?php
/**
*
* acp_styles.php [Urdu]
*
* @package language
* @version $Id: $
* @copyright (c) 2010 phpBB Group
* @author 2010-11-25 - phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_IMAGESETS_EXPLAIN'	=> 'امیج سیٹ میں تمام بٹن، فورم، فولڈر وغیرہ اور دوسری مخصوص تصاویر جو بورڈٍ استعمال کرتا ہے، ہوتی ہیں. یہاں‌آپ موجودہ امیج سیٹ کو ترمیم، ایکسپورٹ یا حذف کر سکتے ہیں اور نئے سیٹ کو امپورٹ‌کر سکتے ہیں',
	'ACP_STYLES_EXPLAIN'	=> 'یہاں آپ بورڈ پر دستیاب سٹائلز کا انتظام کر سکتے ہیں. سٹائل ٹمپلیٹ، تھیم اور امیج سیٹ پر مشتمل ہوتا ہے. آپ موجودہ سٹائلز کو حذف، فعال، غیر فعال کر سکتے ہیں اور نئے سٹائل بنا اور امپورٹ کر سکتے ہیں. آپ پیش منظر کے استعمال سے دیکھ سکتے ہیں کہ سٹائل کیسا نظر آئے گا. موجودہ سٹائل کے ساتھ * ہوتا ہے. ',
	'ACP_TEMPLATES_EXPLAIN'	=> 'ٹمپلیٹ سیٹ بورڈ کا سانچہ بنانے والی اشیاء پر مشتمل ہوتا ہے. یہاں‌آپ موجودہ ٹمپلیٹ سیٹ ترمیم، حذف، ایکسپورٹ یا امپورٹ کر سکتے ہیں. آپ BBCode بنانے والا کوڈ بھی تبدیل کر سکتے ہیں',
	'ACP_THEMES_EXPLAIN'	=> 'آپ یہاں تھیمز کو بنا، انسٹال، تبدیل، حذف اور ایکسپورٹ کر سکتے ہیں. تھیم رنگوں‌اور تصاویر کی تنصیب ہوتی ہے.',
	'ADD_IMAGESET'	=> 'امیج سیٹ بنائیں',
	'ADD_IMAGESET_EXPLAIN'	=> 'یہاں آپ نیا امیج سیٹ بنا سکتے ہیں. آپکے سرور کی ترتیب کی بنیاد پر آپکو مختلف آپشن بھی مل سکتے ہیں. مثلا آپ اس امیج سیٹ‌کو دوسرے کی بنیاد بھی بنا سکتے ہیں. آپ ایک امیج سیٹ بنا سکتے اور امپورٹ‌بھی کر سکتے ہیں. ',
	'ADD_STYLE'	=> 'سٹائل بنائیں',
	'ADD_STYLE_EXPLAIN'	=> 'یہاں آپ نیا سٹائل بنا سکتے ہیں. آپکے سرور کی ترتیب کی بنیاد پر آپکو مختلف آپشن بھی مل سکتے ہیں. مثلا آپ اس سٹائل کو دوسرے کی بنیاد بھی بنا سکتے ہیں. آپ ایک سٹائل بنا سکتے اور امپورٹ‌بھی کر سکتے ہیں. ',
	'ADD_TEMPLATE'	=> 'ٹمپلیٹ بنائیں',
	'ADD_TEMPLATE_EXPLAIN'	=> 'یہاں آپ نیا ٹمپلیٹ بنا سکتے ہیں. آپکے سرور کی ترتیب کی بنیاد پر آپکو مختلف آپشن بھی مل سکتے ہیں. مثلا آپ اس ٹمپلیٹ کو دوسرے کی بنیاد بھی بنا سکتے ہیں. آپ ایک ٹمپلیٹ بنا سکتے اور امپورٹ‌بھی کر سکتے ہیں. ',
	'ADD_THEME'	=> 'تھیم بنائیں',
	'ADD_THEME_EXPLAIN'	=> 'یہاں آپ نیا تھیم بنا سکتے ہیں. آپکے سرور کی ترتیب کی بنیاد پر آپکو مختلف آپشن بھی مل سکتے ہیں. مثلا آپ اس تھیم کو دوسرے کی بنیاد بھی بنا سکتے ہیں. آپ ایک تھیم بنا سکتے اور امپورٹ‌بھی کر سکتے ہیں. ',
	'ARCHIVE_FORMAT'	=> 'آرکایؤ فائل کی قسم',
	'AUTOMATIC_EXPLAIN'	=> 'خودکار شناخت کے لیے خالی چھوڑیں',
	'BACKGROUND'	=> 'پس منظر',
	'BACKGROUND_COLOUR'	=> 'پس منظر رنگ',
	'BACKGROUND_IMAGE'	=> 'پس منظر تصویر',
	'BACKGROUND_REPEAT'	=> 'پس منظر اعادہ (repeat)',
	'BOLD'	=> 'بولڈ',
	'CACHE'	=> 'کیشے',
	'CACHE_CACHED'	=> 'کیشے کیا گیا',
	'CACHE_FILENAME'	=> 'ٹمپلیٹ فائل',
	'CACHE_FILESIZE'	=> 'فائل کا حجم',
	'CACHE_MODIFIED'	=> 'تبدیل شدہ',
	'CONFIRM_IMAGESET_REFRESH'	=> 'کیا آپ واقعی تمام امیج سیٹ ڈیٹا ریفریش کرنا چاہتے ہیں؟ ',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'کیا آپ واقعی اپنی ٹمپلیٹ فائل کی تمام کیشے صاف کرنا چاہتے ہیں؟',
	'CONFIRM_TEMPLATE_REFRESH'	=> 'کیا آپ واقعی ڈیٹا بیس میں‌موجود ٹمپلیٹ کی فائلز فائل سسٹم میں موجود مواد کے ساتھ ریفریش کرنا چاہتے ہیں؟ ',
	'CONFIRM_THEME_REFRESH'	=> 'کیا آپ واقعی ڈیٹا بیس میں‌موجود تھیم کی فائلز فائل سسٹم میں موجود مواد کے ساتھ ریفریش کرنا چاہتے ہیں؟ ',
	'COPYRIGHT'	=> 'کاپی رائٹ',
	'CREATE_IMAGESET'	=> 'نیا امیج سیٹ بنائیں',
	'CREATE_STYLE'	=> 'نیا سٹائل بنائیں',
	'CREATE_TEMPLATE'	=> 'نیا ٹمپلیٹ سیٹ بنائیں',
	'CREATE_THEME'	=> 'نیا تھیم بنائیں',
	'CURRENT_IMAGE'	=> 'موجودہ تصویر',
	'DEACTIVATE_DEFAULT'	=> 'آپ طے شدہ سٹائل کو غیر فعال نہیں کر سکتے',
	'DELETE_FROM_FS'	=> 'فائل سسٹم سے حذف کریں',
	'DELETE_IMAGESET'	=> 'امیج سیٹ حذف کریں',
	'DELETE_IMAGESET_EXPLAIN'	=> 'یہاں آپ منتخب کردہ امیج سیٹ ڈیٹا بیس سے حذف کر سکتے ہیں. براہ مہربانی نوٹ فرمائیں کہ آپ اسے واپس نہیں‌لا سکتے. آپ سے درخواست ہے کہ آپ پہلے اسے ایکسپورٹ کر لیں.',
	'DELETE_STYLE'	=> 'سٹائل حذف کریں',
	'DELETE_STYLE_EXPLAIN'	=> 'یہاں سے آپ منتخب سٹائل ختم کر سکتے ہیں. آپ سٹائل کے تمام عناصر یہاں سے ختم نہیں کر سکتے. انہیں انفرادی طور پر حذف کریں. آپ حذف کی گئے سٹائلز واپس نہیں لا سکتے.',
	'DELETE_TEMPLATE'	=> 'ٹمپلیٹ حذف کریں',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'یہاں آپ منتخب کردہ ٹمپلیٹ ڈیٹا بیس سے حذف کر سکتے ہیں. براہ مہربانی نوٹ فرمائیں کہ آپ اسے واپس نہیں‌لا سکتے. آپ سے درخواست ہے کہ آپ پہلے اسے ایکسپورٹ کر لیں.',
	'DELETE_THEME'	=> 'تھیم حذف کریں',
	'DELETE_THEME_EXPLAIN'	=> 'یہاں آپ منتخب کردہ تھیم ڈیٹا بیس سے حذف کر سکتے ہیں. براہ مہربانی نوٹ فرمائیں کہ آپ اسے واپس نہیں‌لا سکتے. آپ سے درخواست ہے کہ آپ پہلے اسے ایکسپورٹ کر لیں.',
	'DETAILS'	=> 'تفصیلات',
	'DIMENSIONS_EXPLAIN'	=> 'یہاں "ہاں" منتخب کرنے سے طول عرض بھی شامل ہونگے',
	'EDIT_DETAILS_IMAGESET'	=> 'امیج سیٹ کی تفصیلات بدلیں',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'	=> 'یہاں آپ امیج سیٹ کی تفصیلات بدل سکتے ہیں، جیسا کہ نام',
	'EDIT_DETAILS_STYLE'	=> 'سٹائل ترمیم کریں',
	'EDIT_DETAILS_STYLE_EXPLAIN'	=> 'نیچے دیے گئے فارم کے استعمال سے آپ موجودہ سٹائل میں ترمیم کر سکتے ہیں. آپ تھیم، امیج سیٹ اور ٹمپلیٹ کے مجموعے کو بدل سکتے ہیں. آپ سٹائل کو طے شدہ بھی بنا سکتے ہیں.',
	'EDIT_DETAILS_TEMPLATE'	=> 'ٹمپلیٹ کی تفصیلات بدلیں',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'	=> 'یہاں آپ ٹمپلیٹ‌کی تفصیلات بدل سکتے ہیں، جیسا کہ اسکا نام. آپ سٹائل شیٹ فائل سسٹم سے ڈیٹا بیس اور الٹ میں بدل سکتے ہیں. یہ اختیار آپکی PHP ترتیبات طے کرتی ہیں یا اگر آپ ویب سرور پر فائل کو بدل سکتے ہیں.',
	'EDIT_DETAILS_THEME'	=> 'تھیم کی تفصیلات بدلیں',
	'EDIT_DETAILS_THEME_EXPLAIN'	=> 'یہاں آپ تھیم کی تفصیلات بدل سکتے ہیں، جیسا کہ اسکا نام. آپ سٹائل شیٹ فائل سسٹم سے ڈیٹا بیس اور الٹ میں بدل سکتے ہیں. یہ اختیار آپکی PHP ترتیبات طے کرتی ہیں یا اگر آپ ویب سرور پر فائل کو بدل سکتے ہیں.',
	'EDIT_IMAGESET'	=> 'امیج سیٹ ترمیم کریں',
	'EDIT_IMAGESET_EXPLAIN'	=> 'یہاں آپ امیج سیٹ کو وضح کرنے والی  انفرادی تصاویر بدل سکتے ہیں. آپ تصویر کا طول و عرض بھی واضح کر سکتے ہیں. طول و عرض واضح کرنے سے کچھ براؤزرز میں‌فورم کے مسائل پر قابو پایا جا سکتا ہے، انہیں واضح نہ کرنے سے ڈیٹا بیس کا حجم کچھ کم ہو جاتا ہے.',
	'EDIT_TEMPLATE'	=> 'ٹمپلیٹ ترمیم کریں',
	'EDIT_TEMPLATE_EXPLAIN'	=> 'یہاں آپ ٹمپلیٹ سیٹ کو براہ راست تبدیل کر سکتے ہیں. یاد رکھیں کہ ایک بار ارسال کرنے کے بعد تبدیلیوں کو ختم نہیں کیا جا سکتا. ',
	'EDIT_TEMPLATE_STORED_DB'	=> 'ٹمپلیٹ فائل کو بدلا نہیں جا سکا اس لیے اب ٹمپلیٹ سیٹ کو ترمیم کی گئی فائل کے ساتھ ڈیٹا بیس میں سٹور کر دیا گیا ہے. ',
	'EDIT_THEME'	=> 'تھیم ترمیم کریں',
	'EDIT_THEME_EXPLAIN'	=> 'یہاں آپ منتخب تھیم بدل سکتے ہیں جیسا کہ رنگ، تصاویر وغیرہ',
	'EDIT_THEME_STORED_DB'	=> 'سٹائل شیٹ کی فائل کو بدلا نہیں جا سکا اس لیے تبدیل کی گئی فائل ڈیٹا بیس میں سٹور کر دی گئی ہے.',
	'EDIT_THEME_STORE_PARSED'	=> 'تھیم کے لیے سٹائل شیٹ کا تجزیہ ضروری ہے. ایسا صرف اس وقت ممکن ہے جب فائل ڈیٹا بیس میں سٹور ہو.',
	'EDITOR_DISABLED'	=> 'ٹمپلیٹ ایڈیٹر غیر فعال ہے',
	'EXPORT'	=> 'ایکسپورٹ',
	'FOREGROUND'	=> 'پس منظر',
	'FONT_COLOUR'	=> 'فونٹ کا رنگ',
	'FONT_FACE'	=> 'فونٹ کی شکل',
	'FONT_FACE_EXPLAIN'	=> 'آپ ایک سے زیادہ فونٹس کو "کوما" کے ساتھ واضح کر سکتے ہیں. اگر پہلا فونٹ انسٹال نہ ہو تو دوسرا فونٹ کام کرے گا',
	'FONT_SIZE'	=> 'فونٹ کا حجم',
	'GLOBAL_IMAGES'	=> 'عالمی',
	'HIDE_CSS'	=> 'خام CSS چھپائیں',
	'IMAGE_WIDTH'	=> 'تصویر عرض',
	'IMAGE_HEIGHT'	=> 'تصویر طول',
	'IMAGE'	=> 'تصویر',
	'IMAGE_NAME'	=> 'تصویر کا نام',
	'IMAGE_PARAMETER'	=> 'وراثہ',
	'IMAGE_VALUE'	=> 'قیمت',
	'IMAGESET_ADDED'	=> 'فائل سسٹم میں نیا امیج سیٹ شامل کر دیا گیا',
	'IMAGESET_ADDED_DB'	=> 'ڈیٹا بیس میں نیا امیج سیٹ شامل کر دیا گیا',
	'IMAGESET_DELETED'	=> 'امیج سیٹ‌کامیابی سے حذف کر دیا گیا',
	'IMAGESET_DELETED_FS'	=> 'امیج سیٹ‌ڈیٹا بیس سے حذف کر دیا گیا ہے لیکن فائل سسٹم میں‌کچھ فائلز موجود ہونگی.',
	'IMAGESET_DETAILS_UPDATED'	=> 'امیج سیٹ‌کی تفصیلات کامیابی سے اپ ڈیٹ کر دی گئی ہیں',
	'IMAGESET_ERR_ARCHIVE'	=> 'آرکایؤ کا طریقہ منتخب کریں',
	'IMAGESET_ERR_COPY_LONG'	=> 'کاپی رائٹ 60 حروف سے زیادہ نہیں ہو سکتا',
	'IMAGESET_ERR_NAME_CHARS'	=> 'امیج سیٹ نام میں صرف الفا نیومیریک حروف ہو سکتے ہیں. -،+-,_ اور سپیس',
	'IMAGESET_ERR_NAME_EXIST'	=> 'اس نام کا امیج سیٹ‌پہلے سے موجود ہے',
	'IMAGESET_ERR_NAME_LONG'	=> 'امیج سیٹ‌ کا نام 30 حروف سے زیادہ نہیں‌ہو سکتا.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'آپکے واضح کیے گئے آرکایؤ میں درست امیج سیٹ نہیں ہے.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'اس امیج سیٹ کے ساتھ نام واضح کرنا ضروری ہے',
	'IMAGESET_EXPORT'	=> 'امیج سیٹ ایکسپورٹ کریں',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'یہاں آپ امیج سیٹ‌کو ویک آرکایؤ کی شکل میں ایکسپورٹ کر سکتے ہیں. ',
	'IMAGESET_EXPORTED'	=> 'امیج سیٹ کامیابی سے ایکسپورٹ کر دیا گیا اور %s میں سٹور کیا گیا',
	'IMAGESET_NAME'	=> 'امیج سیٹ کا نام',
	'IMAGESET_REFRESHED'	=> 'امیج سیٹ کامیابی سے ریفریش کر دیا گیا',
	'IMAGESET_UPDATED'	=> 'امیج سیٹ کامیابی سے اپ ڈیٹ کر دیا گیا',
	'ITALIC'	=> 'اٹالک',
	'IMG_CAT_BUTTONS'	=> 'مقامی بٹن',
	'IMG_CAT_CUSTOM'	=> 'کسٹم تصاویر',
	'IMG_CAT_FOLDERS'	=> 'موضوع آئیکن',
	'IMG_CAT_FORUMS'	=> 'فورم آئیکن',
	'IMG_CAT_ICONS'	=> 'عام آئیکن',
	'IMG_CAT_LOGOS'	=> 'علامات (لوگو)',
	'IMG_CAT_POLLS'	=> 'سروے تصاویر',
	'IMG_CAT_UI'	=> 'عام یوزر انٹرفیس کے عناصر',
	'IMG_CAT_USER'	=> 'مزید تصاویر',
	'IMG_SITE_LOGO'	=> 'اہم علامت (لوگو)',
	'IMG_UPLOAD_BAR'	=> 'اپلوڈ پراگریس بار',
	'IMG_POLL_LEFT'	=> 'سروے بایاں ہاتھ',
	'IMG_POLL_CENTER'	=> 'سروے مرکز',
	'IMG_POLL_RIGHT'	=> 'سروے دایاں ہاتھ',
	'IMG_ICON_FRIEND'	=> 'بطور دوست شامل کریں',
	'IMG_ICON_FOE'	=> 'بطور دشمن شامل کریں',
	'IMG_FORUM_LINK'	=> 'فورم ربط',
	'IMG_FORUM_READ'	=> 'فورم',
	'IMG_FORUM_READ_LOCKED'	=> 'فورم مقفل',
	'IMG_FORUM_READ_SUBFORUM'	=> 'ذیلی فورم',
	'IMG_FORUM_UNREAD'	=> 'فورم ان پڑھے مراسلات',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'فورم ان پڑھے مراسلات مقفل',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'ذیلی فورم ان پڑھے مراسلات',
	'IMG_SUBFORUM_READ'	=> 'لیجنڈ ذیلی فورم',
	'IMG_SUBFORUM_UNREAD'	=> 'لیجنڈ ذیلی فورم ان پڑھے مراسلات',
	'IMG_TOPIC_MOVED'	=> 'موضوع منتقل کر دیا گیا',
	'IMG_TOPIC_READ'	=> 'موضوع',
	'IMG_TOPIC_READ_MINE'	=> 'موضوع ارسالی',
	'IMG_TOPIC_READ_HOT'	=> 'موضوع مشہور',
	'IMG_TOPIC_READ_HOT_MINE'	=> 'موضوع مشہور ارسال',
	'IMG_TOPIC_READ_LOCKED'	=> 'موضوع مقفل',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'موضوع مقفل ارسال',
	'IMG_TOPIC_UNREAD'	=> 'موضوع ان پڑھے مراسلات',
	'IMG_TOPIC_UNREAD_MINE'	=> 'موضوع ارسال ان پڑھا',
	'IMG_TOPIC_UNREAD_HOT'	=> 'موضوع مشہور ان پڑھے مراسلات',
	'IMG_TOPIC_UNREAD_HOT_MINE'	=> 'موضوع مشہور ارسال ان پڑھا',
	'IMG_TOPIC_UNREAD_LOCKED'	=> 'موضوع مقفل ان پڑھا',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'موضوع مقفل ارسال ان پڑھا',
	'IMG_STICKY_READ'	=> 'سٹکی موضوع',
	'IMG_STICKY_READ_MINE'	=> 'سٹکی موضوع ارسال',
	'IMG_STICKY_READ_LOCKED'	=> 'سٹکی موضوع مقفل',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'سٹکی موضوع مقفل ارسال',
	'IMG_STICKY_UNREAD'	=> 'سٹکی موضوع ان پڑھے مراسلات',
	'IMG_STICKY_UNREAD_MINE'	=> 'سٹکی موضوع ارسال ان پڑھا',
	'IMG_STICKY_UNREAD_LOCKED'	=> 'سٹکی موضوع مقفل ان پڑھا',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'سٹکی موضوع مقفل ارسال ان پڑھا',
	'IMG_ANNOUNCE_READ'	=> 'اعلان',
	'IMG_ANNOUNCE_READ_MINE'	=> 'اعلان ارسال',
	'IMG_ANNOUNCE_READ_LOCKED'	=> 'اعلان مقفل',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'	=> 'اعلان مقفل ارسال',
	'IMG_ANNOUNCE_UNREAD'	=> 'اعلان ان پڑھے مراسلات',
	'IMG_ANNOUNCE_UNREAD_MINE'	=> 'اعلان ارسال ان پڑھے مراسلات',
	'IMG_ANNOUNCE_UNREAD_LOCKED'	=> 'اعلان مقفل ان پڑھے مراسلات',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'اعلان مقفل ارسال ان پڑھا',
	'IMG_GLOBAL_READ'	=> 'عالمی',
	'IMG_GLOBAL_READ_MINE'	=> 'عالمی ارسال',
	'IMG_GLOBAL_READ_LOCKED'	=> 'عالمی مقفل',
	'IMG_GLOBAL_READ_LOCKED_MINE'	=> 'عالمی مقفل ارسال',
	'IMG_GLOBAL_UNREAD'	=> 'عالمی ان پڑھے مراسلات',
	'IMG_GLOBAL_UNREAD_MINE'	=> 'عالمی ارسال ان پڑھے مراسلات',
	'IMG_GLOBAL_UNREAD_LOCKED'	=> 'عالمی مقفل ان پڑھے مراسلات',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'	=> 'عالمی مقفل ارسال ان پڑھا',
	'IMG_PM_READ'	=> 'پڑھے گئے ذاتی پیغامات',
	'IMG_PM_UNREAD'	=> 'ان پڑھے ذاتی پیغامات',
	'IMG_ICON_BACK_TOP'	=> 'سب سے اوپر',
	'IMG_ICON_CONTACT_AIM'	=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'ای-میل بھیجیں',
	'IMG_ICON_CONTACT_ICQ'	=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'جیبر',
	'IMG_ICON_CONTACT_MSNM'	=> 'MSNM',
	'IMG_ICON_CONTACT_PM'	=> 'پیغام بھیجیں',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'	=> 'ویب سائٹ',
	'IMG_ICON_POST_DELETE'	=> 'مراسلہ حذف',
	'IMG_ICON_POST_EDIT'	=> 'مراسلہ ترمیم',
	'IMG_ICON_POST_INFO'	=> 'مراسلہ تفصیلات دکھائیں',
	'IMG_ICON_POST_QUOTE'	=> 'مراسلہ اقتباس',
	'IMG_ICON_POST_REPORT'	=> 'مراسلہ رپورٹ',
	'IMG_ICON_POST_TARGET'	=> 'چھوٹی پوسٹ',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'نئی چھوٹی پوسٹ',
	'IMG_ICON_TOPIC_ATTACH'	=> 'منسلکات',
	'IMG_ICON_TOPIC_LATEST'	=> 'آخری مراسلہ',
	'IMG_ICON_TOPIC_NEWEST'	=> 'آخری ان پڑھا مراسلہ',
	'IMG_ICON_TOPIC_REPORTED'	=> 'مراسلہ رپورٹ کیا گیا',
	'IMG_ICON_TOPIC_UNAPPROVED'	=> 'مراسلہ نا منظورکیا گیا',
	'IMG_ICON_USER_ONLINE'	=> 'صارف آن لائن',
	'IMG_ICON_USER_OFFLINE'	=> 'صارف آف لائن',
	'IMG_ICON_USER_PROFILE'	=> 'پروفائل دکھائیں',
	'IMG_ICON_USER_SEARCH'	=> 'مراسلات تلاش کریں',
	'IMG_ICON_USER_WARN'	=> 'صارف کو تنبیہ کریں',
	'IMG_BUTTON_PM_FORWARD'	=> 'ذاتی پیغام آگے ',
	'IMG_BUTTON_PM_NEW'	=> 'نیا ذاتی پیغام',
	'IMG_BUTTON_PM_REPLY'	=> 'جواب ذاتی پیغام',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'موضوع مقفل',
	'IMG_BUTTON_TOPIC_NEW'	=> 'نیا موضوع',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'جواب موضوع',
	'IMG_USER_ICON1'	=> 'صارف وضح کردہ تصویر 1',
	'IMG_USER_ICON2'	=> 'صارف وضح کردہ تصویر 2',
	'IMG_USER_ICON3'	=> 'صارف وضح کردہ تصویر 3',
	'IMG_USER_ICON4'	=> 'صارف وضح کردہ تصویر 4',
	'IMG_USER_ICON5'	=> 'صارف وضح کردہ تصویر 5',
	'IMG_USER_ICON6'	=> 'صارف وضح کردہ تصویر 6',
	'IMG_USER_ICON7'	=> 'صارف وضح کردہ تصویر 7',
	'IMG_USER_ICON8'	=> 'صارف وضح کردہ تصویر 8',
	'IMG_USER_ICON9'	=> 'صارف وضح کردہ تصویر 9',
	'IMG_USER_ICON10'	=> 'صارف وضح کردہ تصویر 10',
	'INCLUDE_DIMENSIONS'	=> 'شامل طول و عرض',
	'INCLUDE_IMAGESET'	=> 'شامل امیج سیٹ',
	'INCLUDE_TEMPLATE'	=> 'شامل ٹمپلیٹ',
	'INCLUDE_THEME'	=> 'شامل تھیم',
	'INHERITING_FROM'	=> 'وارث کی طرف سے',
	'INSTALL_IMAGESET'	=> 'امیج سیٹ انسٹال',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'یہاں آپ اپنا منتخب کردہ امیج سیٹ انسٹال کر سکتے ہیں. آپ مخصوص کردہ تفصیلات بدل سکتے ہیں یا طے شدہ استعمال کر سکتےہیں',
	'INSTALL_STYLE'	=> 'سٹائل انسٹال کریں',
	'INSTALL_STYLE_EXPLAIN'	=> 'یہاں آپ نیا سٹائل شامل کر سکتے ہیں اور اگر مناسب ہے تو اسکے عناصر بھی شامل کر سکتے ہیں. اگر متعلقہ سٹائل عناصر پہلے سع موجود ہیں تو وہ تبدیل نہیں کیے جائیں گے. کچھ سٹائلز کے لیے موجودہ عناصر کا انسٹال ہونا ضروری ہے، اگر آپ نے ایسا سٹائل انسٹال کرنے کی کوشش کی تو آپکو مطلع کر دیا جائے گا.',
	'INSTALL_TEMPLATE'	=> 'ٹمپلیٹ انسٹال کریں',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'یہاں‌آپ نیا ٹمپلیٹ سیٹ انسٹال کر سکتے ہیں. آپکو سرور کی بنیاد پر آپکو مختلف اختیارات حاصل ہو سکتے ہیں.',
	'INSTALL_THEME'	=> 'تھیم انسٹال کریں',
	'INSTALL_THEME_EXPLAIN'	=> 'یہاں آپ اپنا منتخب کردہ تھیم انسٹال کر سکتے ہیں. آپ مخصوص کردہ تفصیلات بدل سکتے ہیں یا طے شدہ استعمال کر سکتےہیں',
	'INSTALLED_IMAGESET'	=> 'انسٹال شدہ امیج سیٹ',
	'INSTALLED_STYLE'	=> 'انسٹال شدہ سٹائلز',
	'INSTALLED_TEMPLATE'	=> 'انسٹال شدہ ٹمپلیٹس',
	'INSTALLED_THEME'	=> 'انسٹال شدہ تھیمز',
	'LINE_SPACING'	=> 'لائن سپیسنگ',
	'LOCALISED_IMAGES'	=> 'مقامی',
	'LOCATION_DISABLED_EXPLAIN'	=> 'یہ ترتیب وراثتی ہے اور تبدیل نہیں کی جا سکتی',
	'NO_CLASS'	=> 'سٹائل شیٹ میں کلاس نہیں مل پائی',
	'NO_IMAGESET'	=> 'فائل سسٹم میں امیج سیٹ نہیں ملا',
	'NO_IMAGE'	=> 'کوئی تصویر نہیں',
	'NO_IMAGE_ERROR'	=> 'فائل سسٹم میں‌تصویر نہیں ملی',
	'NO_STYLE'	=> 'فائل سسٹم میں‌ سٹائل نہیں ملا',
	'NO_TEMPLATE'	=> 'فائل سسٹم میں‌ ٹمپلیٹ نہیں ملا',
	'NO_THEME'	=> 'فائل سسٹم میں‌ تھیم نہیں ملا',
	'NO_UNINSTALLED_IMAGESET'	=> 'کوئی غیر انسٹال شدہ امیج سیٹ نہیں ملے',
	'NO_UNINSTALLED_STYLE'	=> 'کوئی غیر انسٹال شدہ سٹائلز نہیں ملے',
	'NO_UNINSTALLED_TEMPLATE'	=> 'کوئی غیر انسٹال شدہ ٹیمپلیٹ نہیں ملے',
	'NO_UNINSTALLED_THEME'	=> 'کوئی غیر انسٹال شدہ تھیم نہیں ملے',
	'NO_UNIT'	=> 'کوئی نہیں',
	'ONLY_IMAGESET'	=> 'صرف یہی امیج سیٹ رہ گیا ہے، آپ اسے حذف نہیں کر سکتے',
	'ONLY_STYLE'	=> 'صرف یہی سٹائل رہ گیا ہے، آپ اسے حذف نہیں کر سکتے',
	'ONLY_TEMPLATE'	=> 'صرف یہی ٹیمپلیٹ رہ گیا ہے، آپ اسے حذف نہیں کر سکتے',
	'ONLY_THEME'	=> 'صرف یہی تھیم رہ گیا ہے، آپ اسے حذف نہیں کر سکتے',
	'OPTIONAL_BASIS'	=> 'اختیاری بنیاد',
	'REFRESH'	=> 'ریفریش',
	'REPEAT_NO'	=> 'کوئی نہیں',
	'REPEAT_X'	=> 'صرف افقی طور پر',
	'REPEAT_Y'	=> 'صرف عمودی طور پر',
	'REPEAT_ALL'	=> 'دونوں اطراف',
	'REPLACE_IMAGESET'	=> 'امیج سیٹ اسکے ساتھ بدلیں',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'یہ امیج سیٹ کسی اس امیج سیٹ‌کی جگہ لے گا جسے آپ حذف کر رہے ہیں. ',
	'REPLACE_STYLE'	=> 'سٹائل اسکے ساتھ بدلیں',
	'REPLACE_STYLE_EXPLAIN'	=> 'یہ سٹائل حذف ہونے والے سٹائل کی جگہ لے گا ان تمام اراکین کے لیے جو اسے استعمال کر رہے ہیں',
	'REPLACE_TEMPLATE'	=> 'ٹیمپلیٹ اسکے ساتھ بدلیں',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'یہ ٹیمپلیٹ حذف ہونے والے ٹیمپلیٹ کی جگہ لے گا ان تمام سٹائلز کے لیے جو اسے استعمال کر رہے ہیں',
	'REPLACE_THEME'	=> 'تھیم اسکے ساتھ بدلیں',
	'REPLACE_THEME_EXPLAIN'	=> 'یہ تھیم حذف ہونے والے تھیم کی جگہ لے گا ان تمام سٹائلز کے لیے جو اسے استعمال کر رہے ہیں',
	'REQUIRES_IMAGESET'	=> 'اس سٹائل کے لیے %s امیج سیٹ کا انسٹال ہونا ضروری ہے',
	'REQUIRES_TEMPLATE'	=> 'اس سٹائل کے لیے %s ٹیمپلیٹ کا انسٹال ہونا ضروری ہے',
	'REQUIRES_THEME'	=> 'اس سٹائل کے لیے %s تھیم کا انسٹال ہونا ضروری ہے',
	'SELECT_IMAGE'	=> 'تصویر منتخب کریں',
	'SELECT_TEMPLATE'	=> 'ٹیمپلیٹ فائل منتخب کریں',
	'SELECT_THEME'	=> 'تھیم فائل منتخب کریں',
	'SELECTED_IMAGE'	=> 'منتخب شدہ تصویر',
	'SELECTED_IMAGESET'	=> 'منتخب شدہ امیج سیٹ',
	'SELECTED_TEMPLATE'	=> 'منتخب شدہ ٹیمپلیٹ',
	'SELECTED_TEMPLATE_FILE'	=> ' منتخب شدہ ٹیمپلیٹ فائل',
	'SELECTED_THEME'	=> ' منتخب شدہ تھیم',
	'SELECTED_THEME_FILE'	=> ' منتخب شدہ تھیم فائل',
	'STORE_DATABASE'	=> 'ڈیٹا بیس',
	'STORE_FILESYSTEM'	=> 'فائل سسٹم',
	'STYLE_ACTIVATE'	=> 'فعال کریں',
	'STYLE_ACTIVE'	=> 'فعال',
	'STYLE_ADDED'	=> 'سٹائل کامیابی سے شامل ہو گیا',
	'STYLE_DEACTIVATE'	=> 'غیر فعال کریں',
	'STYLE_DEFAULT'	=> 'طےشدہ سٹائل بنائیں',
	'STYLE_DELETED'	=> 'سٹائل کامیابی سے حذف ہو گیا',
	'STYLE_DETAILS_UPDATED'	=> 'سٹائل کامیابی سے ترمیم ہو گیا',
	'STYLE_ERR_ARCHIVE'	=> 'براہ مہربانی آرکایؤ طریقہ منتخب کریں',
	'STYLE_ERR_COPY_LONG'	=> 'کاپی رائٹ 60 حروف سے زیادہ نہیں ہو سکتا',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'آپکے لیے کم سے کم ایک سٹائل عنصر کا انتخاب ضروری ہے',
	'STYLE_ERR_NAME_CHARS'	=> 'سٹائل نام میں صرف الفا نیومیریک حروف ہو سکتے ہیں. -،+-,_ اور سپیس',
	'STYLE_ERR_NAME_EXIST'	=> 'اس نام کا سٹائل پہلے سے موجود ہے',
	'STYLE_ERR_NAME_LONG'	=> 'سٹائل نام 30 حروف سے زیادہ نہیں ہو سکتا',
	'STYLE_ERR_NO_IDS'	=> 'اس سٹائل کے لیے تھیم، ٹیمپلیٹ اور امیج سیٹ کا انتخاب لازمی ہے',
	'STYLE_ERR_NOT_STYLE'	=> 'امپورٹ یا اپ لوڈ کیے گئے آرکایؤ میں سٹائل درست نہیں ہے',
	'STYLE_ERR_STYLE_NAME'	=> 'اس سٹائل کے لیے نام کا ہونا ضروری ہے',
	'STYLE_EXPORT'	=> 'سٹائل ایکسپورٹ کریں',
	'STYLE_EXPORT_EXPLAIN'	=> 'یہاں آپ آرکایؤ کی صورت میں سٹائل ایکسپورٹ کر سکتے ہیں. سٹائل کے لیے تمام عناصر کا نہ سہی لیکن کم سے کم ایک عنصر کا ہونا ضروری ہے. ',
	'STYLE_EXPORTED'	=> 'سٹائل کامیابی سے ایکسپورٹ اور %s میں محفوظ کر دیا گیا',
	'STYLE_IMAGESET'	=> 'امیج سیٹ',
	'STYLE_NAME'	=> 'سٹائل نام',
	'STYLE_TEMPLATE'	=> 'ٹیمپلیٹ',
	'STYLE_THEME'	=> 'تھیم',
	'STYLE_USED_BY'	=> 'استعمال برائے (بشمول خودکار صارفین)',
	'TEMPLATE_ADDED'	=> 'ٹیمپلیٹ سیٹ فائل سسٹم میں شامل اور محفوظ‌کر دیا گیا',
	'TEMPLATE_ADDED_DB'	=> 'ٹیمپلیٹ فائل سسٹم میں شامل اور محفوظ‌کر دیا گیا',
	'TEMPLATE_CACHE'	=> 'ٹیمپلیٹ کیشے',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'طے شدہ طور پر phpBB اپنے ٹیمپلیٹس کا جڑا ہوا ورژن استعمال کرتا ہے. یہ ہر صفحے کے منظر پر سرور کا بوجھ کم کرتا ہے. یہاں آپ ہر فائل کی کیشے دیکھ سکتے ہیں اور انہیں انفرادی یا اجتماعی طور پر حذف کر سکتے ہیں.',
	'TEMPLATE_CACHE_CLEARED'	=> 'ٹیمپلیٹ کیشے کامیابی سے ختم کر دی گئی',
	'TEMPLATE_CACHE_EMPTY'	=> 'کوئی کیشے کیے گئے ٹیمپلیٹ نہیں ہیں',
	'TEMPLATE_DELETED'	=> 'ٹیمپلیٹ سیٹ کامیابی سے حذف کر دیا گیا',
	'TEMPLATE_DELETE_DEPENDENT'	=> 'یہ ٹیمپلیٹ‌حذف نہیں‌ہو سکتا کیونکہ ایک یا اس سے زیادہ ٹمپلیٹ سیٹ اس میں سے استعمال ہو رہے ہیں',
	'TEMPLATE_DELETED_FS'	=> 'ٹمپلیٹ سیٹ ڈیٹا بیس سے ختم کر دیا گیا ہے لیکن کچھ مواد فائل سسٹم میں موجود رہ سکتا ہے',
	'TEMPLATE_DETAILS_UPDATED'	=> 'ٹمپلیٹ کی تفصیلات کامیابی سے اپ ڈیٹ کر دی گئی ہیں',
	'TEMPLATE_EDITOR'	=> 'خام HTML ٹیپمپلیٹ ایڈیٹر',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'ٹیپمپلیٹ ایڈیٹر کی اونچائی',
	'TEMPLATE_ERR_ARCHIVE'	=> 'براہ مہربانی آرکایؤ طریقہ منتخب کریں',
	'TEMPLATE_ERR_CACHE_READ'	=> 'کیشے ڈائیریکٹری جس میں کیشے ہوئے ٹیمپلیٹ کی فائلز سٹور ہیں، کھل نہیں سکتی',
	'TEMPLATE_ERR_COPY_LONG'	=> 'کاپی رائٹ 60 حروف سے زیادہ نہیں ہو سکتا',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'ٹیمپلیٹ سیٹ نام میں صرف الفا نیومیریک حروف ہو سکتے ہیں. -،+-,_ اور سپیس',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'اس نام کا ٹیمپلیٹ سیٹ پہلے سے موجود ہے',
	'TEMPLATE_ERR_NAME_LONG'	=> 'ٹیمپلیٹ سیٹ نام 30 حروف سے زیادہ نہیں ہو سکتا',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'واضح کیے گئے آرکایؤ میں ٹیمپلیٹ سیٹ درست نہیں ہے',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE'	=> 'نئے ٹیمپلیٹ سیٹ‌کے لیے %s ٹیمپلیٹ کا انسٹال ہونا ضروری ہے',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'اس ٹیمپلیٹ کے لیے نام کا ہونا ضروری ہے',
	'TEMPLATE_EXPORT'	=> 'ٹیمپلیٹ ایکسپورٹ کریں',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'یہاں آپ آرکایؤ کی صورت میں ٹیمپلیٹ ایکسپورٹ کر سکتے ہیں. اس آرکایؤ میں دوسرے بورڈ پر انسٹال کرنے کے لیے تمام ضروری فائلز موجود ہونگی. آپ انہیں‌براہ راست یا FTP کے زریعے ڈاؤن لوڈ کر سکتے ہیں.',
	'TEMPLATE_EXPORTED'	=> 'ٹیمپلیٹ کامیابی سے ایکسپورٹ اور %s میں‌ سٹور کر دیا گیا',
	'TEMPLATE_FILE'	=> 'ٹیمپلیٹ فائل',
	'TEMPLATE_FILE_UPDATED'	=> 'ٹیمپلیٹ فائل کامیابی سے اپ ڈیٹ کری دی گئی',
	'TEMPLATE_INHERITS'	=> 'یہ ٹیمپلیٹ %s سے موروثی ہے اس لیے یہ اپنے سپر ٹیمپلیٹ سے مختلف ذخیرہ ترتیبات نہیں رکھ سکتا',
	'TEMPLATE_LOCATION'	=> 'ٹمپلیٹ یہاں سٹور کریں',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'تصاویر ہمیشہ فائل سسٹم میں سٹور ہوتی ہیں',
	'TEMPLATE_NAME'	=> 'ٹیمپلیٹ نام',
	'TEMPLATE_FILE_NOT_WRITABLE'	=> 'ٹیمپلیٹ فائل %s لکھی نہیں‌جا سکتی. براہ مہربانی اسکی ڈائیریکٹری یا فائل اجازات دیکھیں.',
	'TEMPLATE_REFRESHED'	=> 'ٹیمپلیٹ کامیابی سےریفیرش کر دیا گیا',
	'THEME_ADDED'	=> 'فائل سسٹم میں نیا تھیم شامل کر دیا گیا',
	'THEME_ADDED_DB'	=> 'ڈیٹا بیس میں نیا تھیم شامل کر دیا گیا',
	'THEME_CLASS_ADDED'	=> 'کسٹم کلاس کامیابی سے شامل کر دی گئی',
	'THEME_DELETED'	=> 'تھیم کامیابی سے حذف کر دیا گیا',
	'THEME_DELETED_FS'	=> 'تھیم ڈیٹا بیس سے ختم کر دیا گیا ہے لیکن کچھ مواد فائل سسٹم میں موجود رہ سکتا ہے',
	'THEME_DETAILS_UPDATED'	=> 'تھیم کی تفصیلات کامیابی سے اپ ڈیٹ کر دی گئی ہیں',
	'THEME_EDITOR'	=> 'تھیم ایڈیٹر',
	'THEME_EDITOR_HEIGHT'	=> 'تھیم ایڈیٹر کی اونچائی',
	'THEME_ERR_ARCHIVE'	=> 'براہ مہربانی آرکایؤ طریقہ منتخب کریں',
	'THEME_ERR_CLASS_CHARS'	=> 'کلاس نام میں صرف الفا نیومیریک حروف ہو سکتے ہیں. -،+-,_ اور سپیس',
	'THEME_ERR_COPY_LONG'	=> 'کاپی رائٹ 60 حروف سے زیادہ نہیں ہو سکتا',
	'THEME_ERR_NAME_CHARS'	=> 'تھیم نام میں صرف الفا نیومیریک حروف ہو سکتے ہیں. -،+-,_ اور سپیس',
	'THEME_ERR_NAME_EXIST'	=> 'اس نام کا تھیم پہلے سے موجود ہے',
	'THEME_ERR_NAME_LONG'	=> 'تھیم نام 30 حروف سے زیادہ نہیں ہو سکتا',
	'THEME_ERR_NOT_THEME'	=> 'واضح کیے گئے آرکایؤ میں تھیم درست نہیں ہے',
	'THEME_ERR_REFRESH_FS'	=> 'یہ تھیم فائل سسٹم میں موجود ہے اس لیے اسے ریفریش کرنے کی ضرورت نہیں',
	'THEME_ERR_STYLE_NAME'	=> 'اس تھیم کے لیے نام کا ہونا ضروری ہے',
	'THEME_FILE'	=> 'تھیم فائل',
	'THEME_EXPORT'	=> 'تھیم ایکسپورٹ کریں',
	'THEME_EXPORT_EXPLAIN'	=> 'یہاں آپ آرکایؤ کی صورت میں تھیم ایکسپورٹ کر سکتے ہیں. اس آرکایؤ میں دوسرے بورڈ پر انسٹال کرنے کے لیے تمام ضروری فائلز موجود ہونگی. آپ انہیں‌براہ راست یا FTP کے زریعے ڈاؤن لوڈ کر سکتے ہیں.',
	'THEME_EXPORTED'	=> 'تھیم کامیابی سے ایکسپورٹ اور %s میں‌ سٹور کر دیا گیا',
	'THEME_LOCATION'	=> 'سٹائل شیٹ یہاں سٹور کریں',
	'THEME_LOCATION_EXPLAIN'	=> 'تصاویر ہمیشہ فائل سسٹم میں سٹور ہوتی ہیں',
	'THEME_NAME'	=> 'تھیم کا نام',
	'THEME_REFRESHED'	=> 'تھیم کامیابی سےریفیرش کر دیا گیا',
	'THEME_UPDATED'	=> 'تھیم کامیابی سے اپ ڈیٹ کر دیا گیا',
	'UNDERLINE'	=> 'انڈر لائن',
	'UNINSTALLED_IMAGESET'	=> 'غیر انسٹال شدہ امیج سیٹ',
	'UNINSTALLED_STYLE'	=> 'غیر انسٹال شدہ سٹائل',
	'UNINSTALLED_TEMPLATE'	=> 'غیر انسٹال شدہ ٹیمپلیٹ',
	'UNINSTALLED_THEME'	=> 'غیر انسٹال شدہ تھیم',
	'UNSET'	=> 'غیر واضح',
));

?>