<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'הגדרות',
    'settings_save' => 'שמור הגדרות',
    'settings_save_success' => 'ההגדרות נשמרו',

    // App Settings
    'app_customization' => 'התאמה אישית',
    'app_features_security' => 'מאפיינים ואבטחה',
    'app_name' => 'שם היישום',
    'app_name_desc' => 'השם הזה יופיע בכותרת ובכל אי-מייל הנשלח מהמערכת',
    'app_name_header' => 'הצג שם בחלק העליון',
    'app_public_access' => 'גישה ציבורית',
    'app_public_access_desc' => 'הפעלת אפשרות זו תאפשר למשתמשים אשר אינם רשומים לגשת לתוכן שלך',
    'app_public_access_desc_guest' => 'הגדרות הרשאה למשתמשים ציבוריים ניתנות לשינוי דרך משתמש מסוג ״אורח״',
    'app_public_access_toggle' => 'אפשר גישה ציבורית',
    'app_public_viewing' => 'לאפשר גישה ציבורית?',
    'app_secure_images' => 'העלאת תמונות מאובטחת',
    'app_secure_images_toggle' => 'אפשר העלאת תמונות מאובטחת',
    'app_secure_images_desc' => 'משיקולי ביצועים, כל התמונות הינן ציבוריות. אפשרות זו מוסיפה מחרוזת אקראית שקשה לנחש לכל כתובת של תמונה. אנא ודא שאפשרות הצגת תוכן התיקייה מבוטל.',
    'app_editor' => 'עורך הדפים',
    'app_editor_desc' => 'בחר באמצעות איזה עורך תתבצע עריכת הדפים',
    'app_custom_html' => 'HTML מותאם אישית לחלק העליון',
    'app_custom_html_desc' => 'כל קוד שיתווסף כאן, יופיע בתחתית תגית ה head של כל דף. חלק זה שימושי על מנת להגדיר עיצובי CSS והתקנת קוד Analytics',
    'app_custom_html_disabled_notice' => 'קוד HTML מותאם מבוטל בדף ההגדרות על מנת לוודא ששינויים שגורמים לבעיה יוכלו להיות מבוטלים לאחר מכן',
    'app_logo' => 'לוגו היישום',
    'app_logo_desc' => 'תמונה זו צריכה להיות בגובה 43 פיקסלים. תמונות גדולות יותר יוקטנו.',
    'app_primary_color' => 'צבע עיקרי ליישום',
    'app_primary_color_desc' => 'ערך זה צריך להיות מסוג hex. <br> יש להשאיר ריק לשימוש בצבע ברירת המחדל',
    'app_homepage' => 'דף הבית של היישום',
    'app_homepage_desc' => 'אנא בחר דף להצגה בדף הבית במקום דף ברירת המחדל. הרשאות הדף לא יחולו בדפים הנבחרים.',
    'app_homepage_select' => 'בחר דף',
    'app_disable_comments' => 'ביטול תגובות',
    'app_disable_comments_toggle' => 'בטל תגובות',
    'app_disable_comments_desc' => 'מבטל את התגובות לאורך כל היישום, תגובות קיימות לא יוצגו.',

    // Registration Settings
    'reg_settings' => 'הרשמה',
    'reg_enable' => 'אפשר הרשמה',
    'reg_enable_toggle' => 'אפשר להרשם',
    'reg_enable_desc' => 'כאשר אפשר להרשם משתמשים יוכלו להכנס באופן עצמאי. בעת ההרשמה המשתמש יקבל הרשאה יחידה כברירת מחדל.',
    'reg_default_role' => 'הרשאה כברירת מחדל',
    'reg_email_confirmation' => 'אימות כתובת אי-מייל',
    'reg_email_confirmation_toggle' => 'יש לאמת את כתובת המייל',
    'reg_confirm_email_desc' => 'אם מופעלת הגבלה לדומיין ספציפי אז אימות המייל לא יבוצע',
    'reg_confirm_restrict_domain' => 'הגבלה לדומיין ספציפי',
    'reg_confirm_restrict_domain_desc' => 'הכנס דומיינים מופרדים בפסיק אשר עבורם תוגבל ההרשמה. משתמשים יקבלו אי-מייל על מנת לאמת את כתובת המייל שלהם. <br> לתשומת לבך: משתמש יוכל לשנות את כתובת המייל שלו לאחר ההרשמה',
    'reg_confirm_restrict_domain_placeholder' => 'אין הגבלה לדומיין',

    // Maintenance settings
    'maint' => 'תחזוקה',
    'maint_image_cleanup' => 'ניקוי תמונות',
    'maint_image_cleanup_desc' => "סורק את הדפים והגרסאות על מנת למצוא אילו תמונות לא בשימוש. יש לוודא גיבוי מלא של מסד הנתונים והתמונות לפני הרצה",
    'maint_image_cleanup_ignore_revisions' => 'התעלם מהתמונות בגרסאות',
    'maint_image_cleanup_run' => 'הפעל ניקוי תמונות',
    'maint_image_cleanup_warning' => 'נמצאו כ :count תמונות אשר לא בשימוש האם ברצונך להמשיך?',
    'maint_image_cleanup_success' => ':count תמונות שלא בשימוש נמחקו',
    'maint_image_cleanup_nothing_found' => 'לא נמצאו תמונות אשר לא בשימוש, לא נמחקו קבצים כלל.',

    // Role Settings
    'roles' => 'תפקידים',
    'role_user_roles' => 'תפקידי משתמשים',
    'role_create' => 'צור תפקיד משתמש חדש',
    'role_create_success' => 'התפקיד נוצר בהצלחה',
    'role_delete' => 'מחק תפקיד',
    'role_delete_confirm' => 'פעולה זו תמחק את התפקיד: :roleName',
    'role_delete_users_assigned' => 'לתפקיד :userCount יש משתמשים אשר משויכים אליו. אם ברצונך להעבירם לתפקיד אחר אנא בחר תפקיד מלמטה',
    'role_delete_no_migration' => "אל תעביר משתמשים לתפקיד",
    'role_delete_sure' => 'האם אתה בטוח שברצונך למחוק את התפקיד?',
    'role_delete_success' => 'התפקיד נמחק בהצלחה',
    'role_edit' => 'ערוך תפקיד',
    'role_details' => 'פרטי תפקיד',
    'role_name' => 'שם התפקיד',
    'role_desc' => 'תיאור קצר של התפקיד',
    'role_external_auth_id' => 'External Authentication IDs',
    'role_system' => 'הרשאות מערכת',
    'role_manage_users' => 'ניהול משתמשים',
    'role_manage_roles' => 'ניהול תפקידים והרשאות תפקידים',
    'role_manage_entity_permissions' => 'נהל הרשאות ספרים, פרקים ודפים',
    'role_manage_own_entity_permissions' => 'נהל הרשאות על ספרים, פרקים ודפים בבעלותך',
    'role_manage_settings' => 'ניהול הגדרות יישום',
    'role_asset' => 'הרשאות משאבים',
    'role_asset_desc' => 'הרשאות אלו שולטות בגישת ברירת המחדל למשאבים בתוך המערכת. הרשאות של ספרים, פרקים ודפים יגברו על הרשאות אלו.',
    'role_asset_admins' => 'מנהלים מקבלים הרשאה מלאה לכל התוכן אך אפשרויות אלו עלולות להציג או להסתיר אפשרויות בממשק',
    'role_all' => 'הכל',
    'role_own' => 'שלי',
    'role_controlled_by_asset' => 'נשלטים על ידי המשאב אליו הועלו',
    'role_save' => 'שמור תפקיד',
    'role_update_success' => 'התפקיד עודכן בהצלחה',
    'role_users' => 'משתמשים משוייכים לתפקיד זה',
    'role_users_none' => 'אין משתמשים המשוייכים לתפקיד זה',

    // Users
    'users' => 'משתמשים',
    'user_profile' => 'פרופיל משתמש',
    'users_add_new' => 'הוסף משתמש חדש',
    'users_search' => 'חפש משתמשים',
    'users_details' => 'פרטי משתמש',
    'users_details_desc' => 'הגדר שם לתצוגה ומייל עבור משתמש זה. כתובת המייל תשמש על מנת להתחבר למערכת',
    'users_details_desc_no_email' => 'הגדר שם לתצוגה כדי שאחרים יוכלו לזהות',
    'users_role' => 'תפקידי משתמשים',
    'users_role_desc' => 'בחר אילו תפקידים ישויכו למשתמש זה. אם המשתמש משוייך למספר תפקידים, ההרשאות יהיו כלל ההרשאות של כל התפקידים',
    'users_password' => 'סיסמא',
    'users_password_desc' => 'הגדר סיסמא עבור גישה למערכת. על הסיסמא להיות באורך של 5 תווים לפחות',
    'users_external_auth_id' => 'זיהוי חיצוני - ID',
    'users_external_auth_id_desc' => 'זיהוי זה יהיה בשימוש מול מערכת ה LDAP שלך',
    'users_password_warning' => 'יש למלא רק אם ברצונך לשנות את הסיסמא.',
    'users_system_public' => 'משתמש זה מייצג את כל האורחים שלא מזוהים אשר משתמשים במערכת. לא ניתן להתחבר למשתמש זה אך הוא מוגדר כברירת מחדל',
    'users_delete' => 'מחק משתמש',
    'users_delete_named' => 'מחק משתמש :userName',
    'users_delete_warning' => 'פעולה זו תמחק את המשתמש \':userName\' מהמערכת',
    'users_delete_confirm' => 'האם ברצונך למחוק משתמש זה?',
    'users_delete_success' => 'המשתמש נמחק בהצלחה',
    'users_edit' => 'עריכת משתמש',
    'users_edit_profile' => 'עריכת פרופיל',
    'users_edit_success' => 'המשתמש עודכן בהצלחה',
    'users_avatar' => 'תמונת משתמש',
    'users_avatar_desc' => 'בחר תמונה אשר תייצג את המשתמש. על התמונה להיות ריבוע של 256px',
    'users_preferred_language' => 'שפה מועדפת',
    'users_preferred_language_desc' => 'אפשרות זו תשנע את השפה אשר מוצגת בממשק המערכת. פעולה זו לא תשנה את התוכן אשר נכתב על ידי המשתמשים.',
    'users_social_accounts' => 'רשתות חברתיות',
    'users_social_accounts_info' => 'כן ניתן לשייך חשבונות אחרים שלך לחיבור וזיהוי קל ומהיר. ניתוק חשבון אינו מנתק גישה קיימת למערכת. לביצוע ניתוק יש לשנות את ההגדרה בהגדרות של חשבון הרשת החברתית',
    'users_social_connect' => 'חיבור החשבון',
    'users_social_disconnect' => 'ניתוק חשבון',
    'users_social_connected' => 'חשבון :socialAccount חובר בהצלחה לחשבון שלך',
    'users_social_disconnected' => ':socialAccount נותק בהצלחה מהחשבון שלך',
];