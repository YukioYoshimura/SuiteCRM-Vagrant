<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_FROM_ADDR' => '送信元アドレス',
    'LBL_REPLY_ADDR' => '返信先(\\"Reply-To\\")のアドレス:',
    'LBL_REPLY_NAME' => '返信先(\\"Reply-To\\")の名前:',

    'LBL_MODULE_NAME' => 'キャンペーン',
    'LBL_MODULE_TITLE' => 'キャンペーン: ホーム',
    'LBL_SEARCH_FORM_TITLE' => 'キャンペーン検索',
    'LBL_LIST_FORM_TITLE' => 'キャンペーン一覧',
    'LBL_NEWSLETTER_LIST_FORM_TITLE' => 'ニュースレター一覧',
    'LBL_CAMPAIGN_NAME' => '名前:',
    'LBL_CAMPAIGN' => 'キャンペーン:',
    'LBL_NAME' => '名前: ',
    'LBL_INVITEE' => '取引先担当者',
    'LBL_LIST_CAMPAIGN_NAME' => 'キャンペーン',
    'LBL_LIST_STATUS' => 'ステータス',
    'LBL_LIST_TYPE' => 'タイプ',
    'LBL_LIST_START_DATE' => '実施日',
    'LBL_LIST_END_DATE' => '終了日',
    'LBL_DATE_ENTERED' => '入力日',
    'LBL_DATE_MODIFIED' => '更新日',
    'LBL_MODIFIED' => '更新者: ',
    'LBL_CREATED' => '作成者: ',
    'LBL_TEAM' => 'チーム: ',
    'LBL_ASSIGNED_TO' => 'アサイン先: ',
    'LBL_ASSIGNED_TO_ID' => 'アサイン先:',
    'LBL_ASSIGNED_TO_NAME' => 'アサイン先:',
    'LBL_CAMPAIGN_START_DATE' => '開始日: ',
    'LBL_CAMPAIGN_END_DATE' => '終了日: ',
    'LBL_CAMPAIGN_STATUS' => 'ステータス: ',
    'LBL_CAMPAIGN_BUDGET' => '予算: ',
    'LBL_CAMPAIGN_EXPECTED_COST' => 'コスト見込み: ',
    'LBL_CAMPAIGN_ACTUAL_COST' => 'コスト実績: ',
    'LBL_CAMPAIGN_EXPECTED_REVENUE' => '売上見込み: ',
    'LBL_CAMPAIGN_IMPRESSIONS' => 'インプレッション: ',
    'LBL_CAMPAIGN_COST_PER_IMPRESSION' => 'インプレッションあたりコスト: ',
    'LBL_CAMPAIGN_COST_PER_CLICK_THROUGH' => 'クリックあたりコスト: ',
    'LBL_CAMPAIGN_OPPORTUNITIES_WON' => '獲得商談:',
    'LBL_CAMPAIGN_TYPE' => 'タイプ: ',
    'LBL_CAMPAIGN_OBJECTIVE' => '目的: ',
    'LBL_CAMPAIGN_CONTENT' => '詳細: ',
    'LBL_CAMPAIGN_INACTIVE_SCHEDULE' => "キャンペーン '{0}' は、'非アクティブ'ステータスを持ちます。'アクティブ'キャンペーン ステータスを設定する必要があります。",
    'LNK_NEW_CAMPAIGN' => 'キャンペーン作成',
    'LNL_NEW_CAMPAIGN_WIZARD' => 'キャンペーン作成',
    'LNK_CAMPAIGN_LIST' => 'キャンペーン',
    'LNK_IMPORT_CAMPAIGNS' => 'Import Campaigns',
	'LNK_NEW_PROSPECT' => 'ターゲット作成',
    'LNK_PROSPECT_LIST' => 'ターゲット',
    'LNK_NEW_PROSPECT_LIST' => 'ターゲットリスト作成',
    'LNK_PROSPECT_LIST_LIST' => 'ターゲットリスト',
    'LBL_MODIFIED_BY' => '更新者: ',
    'LBL_CREATED_BY' => '作成者: ',
    'LBL_TRACKER_TITLE' => 'トラッカー詳細 ',
    'LBL_TRACKER_KEY' => 'トラッカー: ',
    'LBL_TRACKER_URL' => 'トラッカーURL: ',
    'LBL_TRACKER_TEXT' => 'トラッカーリンクテキスト: ',
    'LBL_TRACKER_COUNT' => 'トラッカーカウント: ',
    'LBL_REFER_URL' => 'リダイレクトURL: ',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'キャンペーン',
    'LBL_NEW_FORM_TITLE' => 'キャンペーン作成',
    'LBL_TRACKED_URLS' => 'トラッカーURL一覧',
    'LBL_TRACKED_URLS_SUBPANEL_TITLE' => 'トラッカーURL',
    'LBL_CAMPAIGN_ACCOUNTS_SUBPANEL_TITLE' => '取引先',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'ターゲットリスト',
    'LBL_HISTORY_SUBPANEL_TITLE' => '履歴', // PR 4606
    'LBL_EMAIL_MARKETING_SUBPANEL_TITLE' => 'Eメールマーケティング',
    'LNK_NEW_EMAIL_TEMPLATE' => '電子メールテンプレート作成',
    'LNK_EMAIL_TEMPLATE_LIST' => '電子メールテンプレート',
    'LBL_TRACK_BUTTON_TITLE' => 'ステータスを見る',
    'LBL_TRACK_BUTTON_LABEL' => 'ステータスを見る',
    'LBL_QUEUE_BUTTON_TITLE' => '電子メール送信',
    'LBL_QUEUE_BUTTON_LABEL' => '電子メール送信',
    'LBL_TEST_BUTTON_TITLE' => 'テストメール送信',
    'LBL_TEST_BUTTON_LABEL' => 'テストメール送信',
    'LBL_COPY_AND_PASTE_CODE' => 'もしくは下記のHTMLをコピーして既存ページに張り付けてください。',
    'LBL_CHARSET_NOTICE' => '注意: web のリードのフォームを含むページでは、&lt; head &gt; セクションの次の行を確認してください。',

    'LBL_TODETAIL_BUTTON_TITLE' => '詳細を見る',
    'LBL_TODETAIL_BUTTON_LABEL' => '詳細を見る',

    'LBL_DEFAULT' => 'すべてのターゲットリスト一覧',
    'LBL_MESSAGE_QUEUE_TITLE' => 'メッセージキュー',

    'LBL_LOG_ENTRIES_TARGETED_TITLE' => '送付済み/試行回数',
    'LBL_LOG_ENTRIES_SEND_ERROR_TITLE' => '送信エラー: 他',
    'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE' => '送信エラー: 不正アドレス',
    'LBL_LOG_ENTRIES_LINK_TITLE' => 'リンクからクリック',
    'LBL_LOG_ENTRIES_VIEWED_TITLE' => '閲覧済み',
    'LBL_LOG_ENTRIES_REMOVED_TITLE' => 'メール不可',
    'LBL_LOG_ENTRIES_LEAD_TITLE' => '作成された潜在顧客',
    'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE' => '潜在顧客',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => '商談',
    'LBL_LOG_ENTRIES_CONTACT_TITLE' => '取引先担当者作成済み',

    //error messages.
    'ERR_SENDING_NOW' => 'メッセージが配信されませんでした。後で再送信してください。',

    'LBL_TRACK_ROI_BUTTON_LABEL' => 'ROIを見る',
    'LBL_TRACK_DELETE_BUTTON_TITLE' => 'テストエントリーを削除',
    'LBL_TRACK_DELETE_BUTTON_LABEL' => 'テストエントリーを削除',
    'LBL_TRACK_DELETE_CONFIRM' => 'このオプションによってテスト実行によって作成されたログが削除されます。続けますか？',
    'ERR_NO_MAILBOX' => "以下のマーケティングメッセージは電子メールアカウントと関連付けられていません。<BR>実行前に修正してください。",
    'LBL_LIST_TO_ACTIVITY' => 'ステータスを見る',
    'LBL_CURRENCY' => '通貨:',
    'LBL_TARGETED' => 'ターゲット',
    'LBL_TOTAL_TARGETED' => 'ターゲットの合計',
    'LBL_CAMPAIGN_FREQUENCY' => '頻度:',
    'LBL_NEWSLETTERS' => 'ニュースレター',
    'LBL_NEWSLETTER' => 'ニュースレター',
    'LBL_SURVEY' => '調査',
    'LBL_NEWSLETTER_FORENTRY' => 'NewsLetter',
    'LBL_CREATE_NEWSLETTER' => 'ニュースレターの作成',
    'LBL_LIST_NAME' => '名前',
    'LBL_INBOUND_EMAIL_SETTINGS' => 'インバウンド電子メール設定',
    'LBL_INBOUND_EMAIL_SETTINGS_TITLE' => '受信メール設定 (情報)',
    'LBL_INBOUND_EMAIL_CREATE' => '受信メールの作成',
    'LBL_INBOUND_EMAIL_CREATE_TITLE' => '受信メール (情報) の作成',
    'LBL_STATUS_TEXT' => 'ステータス:',
    'LBL_FROM_MAILBOX_NAME' => 'バウンス扱いアカウント:',
    'LBL_FROM_MAILBOX_TITLE' => 'バウンス扱いメール アカウント',
    'LBL_OUTBOUND_MAILBOX_NAME' => '送信メール アカウント:',
    'LBL_FROM_NAME' => 'From（名）: ',
    'LBL_START_DATE_TIME' => 'スケジュールの日時: ',
    'LBL_DATE_START' => '実施日 ',
    'LBL_TIME_START' => '開始時間 ',
    'LBL_TEMPLATE' => '電子メールテンプレート: ',
    'LBL_TEMPLATE_FIELD' => '電子メールテンプレート: ',
    'LBL_SUBJECT' => '件名: ',
    'LBL_WIDTH' => '既定の幅:',
    'LBL_CREATE_EMAIL_TEMPLATE' => '作成',
    'LBL_MESSAGE_FOR' => 'メッセージ宛先:',
    'LBL_FINISH' => '完了',
    'LBL_ALL_PROSPECT_LISTS' => 'キャンペーンの中のすべてのターゲットリスト',
    'LBL_EDIT_EMAIL_TEMPLATE' => '編集',
    'LBL_EMAIL_SETUP_WIZARD' => '電子メールの設定',
    'LBL_DIAGNOSTIC_WIZARD' => '分析',
    'LBL_ALREADY_SUBSCRIBED_HEADER' => '購読中のニュースレター',
    'LBL_UNSUBSCRIBED_HEADER' => '有効なニュースレター',
    'LBL_UNSUBSCRIBED_HEADER_EXPL' => 'ニュースレターを利用可能なニュースレター一覧に移動/購読解除するニュースレター一覧では、取引先担当者を解約者一覧に追加します。当初の購読リストもしくはターゲットリストから取引先担当者を削除することはありません。',
    'LBL_FILTER_CHART_BY' => 'チャートの絞込み:',
    'LBL_MANAGE_SUBSCRIPTIONS_TITLE' => 'サブスクリプションの管理',
    'LBL_MARK_AS_SENT' => '送付済みとマーク',
    'LBL_DEFAULT_LIST_ENTRIES_WERE_PROCESSED' => 'エントリーが処理されました。',
    //newsletter wizard
    'LBL_EDIT_TRACKER_NAME' => 'トラッカー名',
    'LBL_EDIT_TRACKER_URL' => 'トラッカーURL',
    'LBL_EDIT_OPT_OUT_' => '解約リンク',
    'LBL_EDIT_OPT_OUT' => '解約リンク:',
    'LBL_UNSUBSCRIPTION_LIST_NAME' => '脱退リスト:',
    'LBL_SUBSCRIPTION_LIST_NAME' => 'サブスクリプションの一覧:',
    'LBL_TEST_LIST_NAME' => 'テストの一覧:',
    'LBL_UNSUBSCRIPTION_TYPE_NAME' => '解約',
    'LBL_SUBSCRIPTION_TYPE_NAME' => '購読',
    'LBL_TEST_TYPE_NAME' => 'テスト',
    'LBL_UNSUBSCRIPTION_LIST' => '解約リスト',
    'LBL_SUBSCRIPTION_LIST' => '購読リスト',
    'LBL_MRKT_NAME' => 'マーケティング メール名',
    'LBL_MRKT_NAME_FIELD' => 'マーケティング メール名:',
    'LBL_TEST_LIST' => 'テストリスト',
    'LBL_WIZARD_HEADER_MESSAGE' => 'キャンペーンの特定のため、必須項目を入力して下さい。',
    'LBL_WIZARD_BUDGET_MESSAGE' => '(Roi) を計算するための予算を入力します',
    'LBL_WIZARD_TARGET_MESSAGE1' => 'キャンペーンに使用するターゲットリストを作成または選択してください。このリストはニュースレターを送信する宛先になります。',
    'LBL_WIZARD_TARGET_MESSAGE2' => '新しいターゲット リストを作成します:',
    'LBL_WIZARD_TRACKER_MESSAGE' => 'キャンペーンに使用するトラッカーURLを定義してください。名前とURLの両方を指定する必要があります。',
    'LBL_HOME_START_MESSAGE' => 'どのようなキャンペーンを作成しますか？',
    'LBL_WIZARD_LAST_STEP_MESSAGE' => ' これは最後のステップなので次には進めません。',
    'LBL_WIZARD_FIRST_STEP_MESSAGE' => ' これは最初のステップなので前には戻れません。',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP1' => 'キャンペーンヘッダ',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP2' => 'キャンペーン予算',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP3' => 'キャンペーントラッカーURL ',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP4' => '購読情報',
    'LBL_WIZ_MARKETING_TITLE' => 'マーケティングメール',
    'LBL_WIZ_SENDMAIL_TITLE' => 'メール マーケティングのレコードを選択します',
    'LBL_WIZ_EMAILTPL_TITLE' => 'メール テンプレートを選択',
    'LBL_WIZ_NEWSLETTER_TITLE_SUMMARY' => 'サマリ',
    'LBL_NAVIGATION_MENU_GEN1' => 'キャンペーンヘッダ',
    'LBL_NAVIGATION_MENU_GEN2' => '予算',
    'LBL_NAVIGATION_MENU_TRACKERS' => 'トラッカー',
    'LBL_NAVIGATION_MENU_MARKETING' => 'マーケティング',
    'LBL_NAVIGATION_MENU_SEND_EMAIL' => '電子メール送信',
    'LBL_NAVIGATION_MENU_SUBSCRIPTIONS' => '購読',
    'LBL_NAVIGATION_MENU_SUMMARY' => 'サマリ',
    'LBL_NAVIGATION_MENU_SEND_EMAIL_AND_SUMMARY' => 'メールとサマリの送信',
    'LBL_SUBSCRIPTION_TARGET_WIZARD_DESC' => 'これは、このキャンペーン用の購読タイプのターゲットリストを定義します。<br>このターゲットリストは、このキャンペーン用の電子メールを送信するために使用されます。<br>リストを準備しない場合は、空のリストが作成されます。',
    'LBL_UNSUBSCRIPTION_TARGET_WIZARD_DESC' => 'これは、このキャンペーン用の解約タイプのターゲットリストを定義します。<br>このターゲットリストは、このキャンペーンを解約し、電子メールを送信してはならない人の名前を含んでいます。<br>リストを準備しない場合は、空のリストが作成されます。',
    'LBL_TEST_TARGET_WIZARD_DESC' => 'これは、このキャンペーン用のテストタイプのターゲットリストを定義します。<br>このターゲットリストは、このキャンペーン用のテスト電子メールを送信するために使用されます。<br>リストを準備しない場合は、空のリストが作成されます。',
    'LBL_ADD_TRACKER' => 'トラッカーの作成',
    'LBL_CREATE_TARGET' => '作成',
    'LBL_SELECT_TARGET' => '既存のターゲットリストの利用',
    'LBL_REMOVE' => '削除', // PR 5451
    'LBL_START' => '開始',
    'LBL_TOTAL_ENTRIES' => 'エントリー',
    'LBL_CONFIRM_SEND_SAVE' => 'キャンペーンメールを送信するページに移動します。保存して継続しますか？',
    'LBL_NEWSLETTER WIZARD_TITLE' => 'ニュースレター: ',
    'LBL_NEWSLETTER_WIZARD_START_TITLE' => 'ニュースレターの編集: ',
    'LBL_CAMPAIGN_WIZARD_START_TITLE' => 'キャンペーンの編集: ',
    'LBL_SEND_AS_TEST' => 'マーケティングメールのテスト送信',
    'LBL_SAVE_EXIT_BUTTON_LABEL' => '新しいグループフォルダを追加',
    'LBL_SAVE_CONTINUE_BUTTON_LABEL' => '次へ',
    'LBL_TARGET_LISTS' => 'ターゲットリスト',
    'LBL_NO_SUBS_ENTRIES_WARNING' => '購読リストに少なくとも1人のエントリが追加されるまでキャンペーン電子メールを送信することはできません。完了後に追加してください。',
    'LBL_NO_TARGET_ENTRIES_WARNING' => 'ターゲットリストに少なくとも1人のエントリが追加されるまでマーケティング電子メールを送信することはできません。完了後に追加してください。',
    'LBL_NO_TARGETS_WARNING' => 'キャンペーンに少なくとも1人のターゲットが追加されるまでマーケティング電子メールを送信することはできません。.',
    'LBL_NO_TARGET_ENTRIES_WARNING_NON_EMAIL' => 'このキャンペーン対して選択したターゲット リストには関連付けられたターゲットがありません。終了後、リストを読み込むことができます。',
    'LBL_NO_TARGETS_WARNING_NON_EMAIL' => 'このキャンペーンのターゲット リストが選択されていません。',
    'LBL_NONE' => '1つも作成されていません',
    'LBL_CAMPAIGN_WIZARD' => 'キャンペーンウィザード',
    'LBL_EMAIL' => '電子メール',
    'LBL_OTHER_TYPE_CAMPAIGN' => '電子メール以外のキャンペーン',
    'LBL_TARGET_LIST' => 'ターゲットリスト',
    'LBL_TARGET_TYPE' => 'ターゲット リストの種類:',
    'LBL_TARGET_NAME' => 'ターゲットリスト名',
    'LBL_NUMBER_OF_TARGET' => 'ターゲットの番号',
    'LBL_EMAILS_SCHEDULED' => 'スケジュール済み電子メール',
    'LBL_TEST_EMAILS_SENT' => 'テスト送信済み',
    'LBL_USERS_CANNOT_OPTOUT' => 'システムユーザは電子メールの受信を拒否できません。',
    'LBL_ELECTED_TO_OPTOUT' => 'あなたは電子メールの受信リストから除かれました。',
    'LBL_COPY_OF' => 'コピー ',
    'LBL_SAVED_SEARCH' => '保存済みビュー',
    //email setup wizard
    'LBL_WIZ_FROM_NAME' => 'From（名前）',
    'LBL_WIZ_FROM_ADDRESS' => 'From（アドレス）：',
    'LBL_EMAILS_PER_RUN' => '１回のバッチで送信されるメール数:',
    'LBL_CUSTOM_LOCATION' => '選択を許可',
    'LBL_DEFAULT_LOCATION' => '自動生成',
    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'バッチごとの送信メール数の値は整数である必要があります',
    'LBL_LOCATION_TRACK' => 'キャンペーントラッキングファイルの場所（例: campaign_tracker.php）',
    'LBL_MAIL_SENDTYPE' => 'メール送信エージェント:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP認証を使用？',
    'LBL_MAIL_SMTPPASS' => 'SMTPパスワード:',
    'LBL_MAIL_SMTPPORT' => 'SMTPポート',
    'LBL_MAIL_SMTPSERVER' => 'SMTPサーバ',
    'LBL_MAIL_SMTPUSER' => 'SMTPユーザ名',
    'LBL_EMAIL_SETUP_WIZARD_TITLE' => 'キャンペーンメールのセットアップ',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'config.phpで設定されたサイトURL',
    'LBL_NOTIFY_TITLE' => '電子メール通知の設定',
    'LBL_MASS_MAILING_TITLE' => '大量メール送信オプション',
    'LBL_SERVER_TYPE' => 'メールサーバプロトコル',
    'LBL_SERVER_URL' => '受信メールサーバ',
    'LBL_LOGIN' => 'ユーザ名',
    'LBL_PORT' => 'メールサーバのポート',
    'LBL_MAILBOX_NAME' => 'メールアカウント名:',
    'LBL_PASSWORD' => 'パスワード',
    'LBL_MAILBOX_DEFAULT' => '受信箱',
    'LBL_MAILBOX' => '監視フォルダ',
    'LBL_NAVIGATION_MENU_SETUP' => '電子メールの設定',
    'LBL_NAVIGATION_MENU_NEW_MAILBOX' => '新たな受信箱',
    'LBL_MAILBOX_CHECK_WIZ_GOOD' => 'バウンス処理用のメールアカウントが検出されました。新たに作成する必要はありませんが、以下で作成することも可能です。',
    'LBL_MAILBOX_CHECK_WIZ_BAD' => 'バウンス処理用のメールアカウントが検出されませんでした。以下で作成してください。',
    'LBL_CAMP_MESSAGE_COPY' => 'キャンペーンメッセージのコピーを保存:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'すべてのキャンペーンで送った<bold>すべての</bold>電子メールメッセージの完全なコピーを保存しますか？<bold>いいえを推奨します。</bold> いいえを選ぶと送られたテンプレートのみ保存され、個々のメッセージで必要な変数は再生成されます。',
    'LBL_YES' => 'はい',
    'LBL_NO' => 'いいえ',
    'LBL_EMAIL_SETUP_DESC' => '以下のフォームに入力し、システム設定を更新することで電子メールの送信が可能になります。',
    'LBL_CREATE_MAILBOX' => '新たなメールアカウントを作成',
    'LBL_SSL_DESC' => 'メールサーバがSSLをサポートする場合、SSLを利用してメールを受信します。',
    'LBL_SSL' => 'SSL利用',
    //campaign diagnostics
    'LNK_CAMPAIGN_DIGNOSTIC_LINK' => '以下の理由でキャンペーンが正常に動作せず、メールが送信されない可能性があります。:',
    'LBL_CAMPAIGN_DIAGNOSTICS' => 'キャンペーン診断',
    'LBL_MAILBOX_CHECK1_GOOD' => 'バウンス処理用のメールアカウントが検出されました。:',
    'LBL_MAILBOX_CHECK1_BAD' => 'バウンス処理用のメールアカウントが検出されませんでした。',
    'LBL_MAILBOX_CHECK2_GOOD' => '電子メールの設定が完了しています。:',
    'LBL_MAILBOX_CHECK2_BAD' => '電子メールの設定が完了していません。',
    'LBL_SCHEDULER_CHECK_GOOD' => 'スケジューラーを検出',
    'LBL_SCHEDULER_CHECK_BAD' => 'スケジューラーが検出されません。',
    'LBL_SCHEDULER_CHECK1_BAD' => 'キャンペーンメールのバウンス処理を行うスケジュールが設定されていません。',
    'LBL_SCHEDULER_CHECK2_BAD' => 'キャンペーンメールの処理を行うスケジュールが設定されていません。',
    'LBL_SCHEDULER_NAME' => 'スケジューラー',
    'LBL_SCHEDULER_STATUS' => 'ステータス',
    'LBL_EMAIL_SETUP_WIZ' => '電子メール設定の開始',
    'LBL_SCHEDULER_LINK' => 'スケジューラ管理画面へ進む',
    'LBL_TO_WIZARD_TITLE' => 'キャンペーンウィザードの開始',
    'LBL_EDIT_EXISTING' => 'キャンペーンの編集',
    'LBL_SEND_EMAIL' => 'スケジュールされた時刻にメールを送信します',
    'LBL_CREATE_NEW_MARKETING_EMAIL' => '新たなマーケティングメールを作成',
    'LBL_NON_ADMIN_ERROR_MSG' => 'この問題を修復するためにはシステム管理者に連絡してください。',
    'LBL_EMAIL_COMPONENTS' => '電子メールコンポーネント',
    'LBL_SCHEDULER_COMPONENTS' => 'スケジューラーコンポーネント',
    'LBL_RECHECK_BTN' => '再確認',
    //web to lead wizard titles
    'LBL_DEFINE_LEAD_HEADER' => 'ヘッダの設定:',
    'LBL_LEAD_DEFAULT_HEADER' => 'キャンペーン用のWeb-to-リード',
    'LBL_DEFINE_LEAD_SUBMIT' => '送信ボタンのラベル:',
    'LBL_DEFINE_LEAD_POST_URL' => '送信URL:',
    'LBL_EDIT_LEAD_POST_URL' => '送信URLを編集？',
    'LBL_DEFINE_LEAD_REDIRECT_URL' => 'リダイレクトURL:',
    'LBL_LEAD_NOTIFY_CAMPAIGN' => '関連キャンペーン:',
    'LBL_DEFAULT_LEAD_SUBMIT' => '送信',
    'LBL_WEB_TO_LEAD' => '人物のフォームを作成します',
    'LBL_LEAD_FOOTER' => 'フッタの設定:',
    'NTC_NO_LEGENDS' => 'なし',
    'NTC_DELETE_CONFIRMATION' => '本当にこのレコードを削除してよいですか?',
    'LBL_DESCRIPTION_LEAD_FORM' => '詳細情報の設定:',
    'LBL_DESCRIPTION_TEXT_LEAD_FORM' => 'このフォームを送信するとキャンペーンに紐付けられたリードが生成されます。',
    'LBL_DOWNLOAD_TEXT_WEB_TO_LEAD_FORM' => 'Web-to-リードフォームをダウンロードしてください。',
    'LBL_DOWNLOAD_WEB_TO_LEAD_FORM' => 'Webからフォームへ',
    'LBL_PROVIDE_WEB_TO_LEAD_FORM_FIELDS' => '必須情報を入力して下さい。',
    'LBL_NOT_VALID_EMAIL_ADDRESS' => '不正なメールアドレス',
    'LBL_SELECT_REQUIRED_LEAD_FIELDS' => '必要なフィールドを選択してください。:',
    //Campaign charts
    'LBL_CAMPAIGN_RETURN_ON_INVESTMENT' => 'キャンペーン対投資効果',
    'LBL_CAMPAIGN_RESPONSE_BY_RECIPIENT_ACTIVITY' => '受信者のアクション別反応',
    'LBL_LOG_ENTRIES_BLOCKEDD_TITLE' => '電子メールアドレスまたはドメインによって抑止',

    'LBL_AMOUNT_IN' => '次の通貨での合計 ',

    // Labels for ROI Chart
    'LBL_ROI_CHART_REVENUE' => '売上',
    'LBL_ROI_CHART_INVESTMENT' => '投資',
    'LBL_ROI_CHART_BUDGET' => '予算',
    'LBL_ROI_CHART_EXPECTED_REVENUE' => '売上予算',

    // Top Campaigns Dashlet
    'LBL_TOP_CAMPAIGNS' => 'トップキャンペーン',
    'LBL_TOP_CAMPAIGNS_NAME' => 'キャンペーン名',
    'LBL_TOP_CAMPAIGNS_REVENUE' => '売上',
    'LBL_TOP_CAMPAIGNS_DESCRIPTION' => '売上高でトップを実行するキャンペーン',
    'LBL_LEADS' => 'リード',
    'LBL_CONTACTS' => '取引先担当者',
    'LBL_ACCOUNTS' => '取引先',
    'LBL_OPPORTUNITIES' => '商談',
    'LBL_CREATED_USER' => '作成者',
    'LBL_MODIFIED_USER' => '変更者',
    'LBL_LOG_ENTRIES' => 'ログエントリ',
    'LBL_INVALID EMAIL_SUBPANEL_TITLE' => '不正電子メール',
    'LBL_SEND ERROR_SUBPANEL_TITLE' => '送信エラー',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '取引先',
    'LBL_LEADS_SUBPANEL_TITLE' => 'リード',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '商談',

    'LBL_LEAD_FORM_WIZARD' => '潜在顧客フォームウィザード',
    'LBL_CAMPAIGN_INFORMATION' => '概要',  //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_EDIT_BUTTON' => 'キャンペーンウィザードの開始',
    'LBL_YEAR' => "年",
    'LBL_DAY' => "日",
    'LBL_EDIT_LAYOUT' => 'レイアウト編集' /*for 508 compliance fix*/,
    'LBL_INVALID' => '無効' /*for 508 compliance fix*/,
    'LBL_VALID' => '有効' /*for 508 compliance fix*/,
    'LBL_ALERT' => '警告' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'キャンペーンウィザードの開始' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => '削除' /*for 508 compliance fix*/,
    'LBL_DELETE' => '削除' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => '閲覧',
    'ERR_NO_OPTS_SAVED' => 'あなたのインバウンドメールアカウントに最適な条件は一つも保存されませんでした。',
    'ERR_REVIEW_EMAIL_SETTINGS' => '設定を見直してください。',
    'LBL_LEADS_DELETED_SINCE_CREATED' => 'このキャンペーンによって作成された {0} 潜在顧客は、作成されてから削除されています。',
    'LBL_FROM_NAME_HELP' => 'これは受信者に表示される名前になります',
    'LBL_FROM_ADDR_HELP' => 'これは受信者に表示されるfromアドレスになります',
    'LBL_REPLY_TO_NAME_HELP' => 'これは受信者に表示される reply to の名前になります',
    'LBL_REPLY_TO_ADDR_HELP' => 'これは受信者に表示される reply to のメールになります',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => '送信メール アカウントを表示',
    'LBL_CREATE_EMAIL_TEMPLATE_BTN' => '新しいグループフォルダを追加',
    'LBL_SAVE_EMAIL_TEMPLATE_BTN' => '新しいグループフォルダを追加',
    'LBL_SEARCH_TARGET_LIST' => 'ターゲット リストのフィルター',
    'LBL_INSERT_URL_REF' => 'URLリファレンスを挿入',
    'LBL_INSERT_TRACKER_URL' => 'トラッカーURLを挿入:',
    'LBL_CREATE_TRACKER_BTN' => 'トラッカーの作成',
    'LBL_INSERT_TRACKER_BTN' => 'トラッカーを挿入',
    'LBL_EDIT_TRACKER_BTN' => 'トラッカーを編集',
    'LBL_CREATE_TRACKER_URL' => '-- 作成 --',
    'LBL_INSERT' => '挿入',
    'LBL_INSERT_VARIABLE' => '挿入:',
    'LBL_INSERT_VARIABLE_BTN' => '変数を挿入する',
    'LBL_INSERT_VARIABLE_SUBJECT_BTN' => '変数を挿入する',
    'LBL_EMAIL_VARIABLES' => 'メールの変数',
    'LBL_SAVE' => '新しいグループフォルダを追加',
    'ERR_REQUIRED_TRACKER_NAME' => 'トラッカー名が必要です',
    'ERR_REQUIRED_TRACKER_URL' => 'トラッカー URL が必要です',
    'LBL_UPDATE_TEMPLATE' => 'テンプレートを更新する',
    'LBL_ATTACHMENTS' => '添付ファイル',
    'ERR_MISSING_REQUIRED_FIELDS' => '必須フィールドが不足しています。',
    'LBL_SUGAR_DOCUMENT' => 'ドキュメント',
    'LBL_EMAIL_ATTACHMENT' => '電子メール添付',
    'LBL_PROCESS_BOUNCED_EMAILS' => '返信メールを処理する',
    'LBL_PROCESS_CAMPAIGN_EMAILS' => 'キャンペーン メールを処理する',
    'LBL_SENDER_DETAILS' => '送信者詳細',
    'LBL_CHOOSE_TEMPLATES' => 'テンプレートを選択する',
    'LBL_CHOOSE_TARGETS' => 'ターゲットを選択する',
    'LBL_CAMPAIGN_DETAILS_AND_CONDITIONS' => 'キャンペーンの詳細と条件',
    'LBL_OPEN_IN_NEW_WINDOW' => '新しいウィンドウで開く...',
    'LBL_CREATE_MARKETING_RECORD' => '次へ',
    'LBL_NO_TEMPLATE_SELECTED' => 'メール テンプレートが選択されていません',
    'LBL_SELECT_TEMPLATE' => 'テンプレート',
    'LBL_WIZARD_ADD_TARGET' => '既存のターゲットリストを追加:',
    'LBL_CLICK_TO_ADD' => '追加するテンプレート アイテムをクリックしてください。',
    'LBL_CANCEL' => 'キャンセル',
    'LBL_EMPTY_SUBJECT' => 'メールの件名が空白です。続行してもよろしいですか？',
    'LBL_OVERWRITE_QUESTION' => 'メール テンプレートを上書きしてもよろしいですか？',
    'LBL_SELECT_EMAIL_TRACKER' => 'メール トラッカーを選択してください。',
    'LBL_STEP_UNAVAILABLE' => '進むには次へボタンをクリックしてください。',
    'LBL_STEP_INFO_CAMPAIGN_HEADER' => 'キャンペーンの名前を入力し、状態を選択してください',
    'LBL_STEP_INFO_TARGET_LIST_NEWSLETTER' => '各キャンペーンには、サブスクリプション、アンサブスクリプションおよびテストのターゲット リストが必要です。リストが指定されていない場合、保存の際にからのリストが作成されます。',
    'LBL_STEP_INFO_TARGET_LIST_NON_NEWSLETTER' => 'このキャンペーンに対するターゲット リストを選択してください。',
    'LBL_STEP_INFO_EMAIL_TEMPLATE' => 'メール テンプレートを選択するか、新しいメール テンプレートを作成してください。',
    'LBL_STEP_INFO_MARKETING' => 'メール アカウントを選択してください。',
    'LBL_NO_SUBJECT' => '選択されたメール テンプレートには件名がありません',
    'LBL_NO_HTML_BODY_CONTENTS' => '選択されたメール テンプレートには HTML 本文がありません',
    'LBL_NO_SELECTED_TEMPLATE' => '選択したテンプレートがありません！',
    'LBL_NO_BODY_CONTENTS' => '選択されたメール テンプレートには本文がありません',
    'LBL_ERROR_ON_MARKETING' => '必要なフィールドがありません',

    'LBL_NO_MARKETING_NAME' => 'マーケティング レコード名が空です',
    'LBL_NO_INBOUND_EMAIL_SELECTED' => 'マーケティングでメール アカウントが選択されていません',
    'LBL_NO_DATE_START' => 'マーケティング レコードに開始日がありません',
    'LBL_NO_FROM_NAME' => '送信者名が空です',
    'LBL_NO_FROM_ADDR_OR_INVALID' => '送信者アドレスが空または無効です',
    'LBL_NEWSLETTER_TITLE' => ' ニュースレター キャンペーンは、1 つのターゲット リストにメールを送信することができるタイプのキャンペーンです。',
    'LBL_EMAIL_TITLE' => 'メール キャンペーンは、複数のターゲット リストにメールを送信することができますメール キャンペーンのタイプです。',
    'LBL_NON_EMAIL_TITLE' => '非メール キャンペーンはメールを送信しません。',
    'LBL_TEMPLATE_SAVING' => 'しばらくお待ちください。テンプレートを保存しています..',
    'LBL_TEMPLATE_SAVED' => 'テンプレートを保存しました。',
    'LBL_PLEASE_SELECT_OPTION' => 'オプションを選択してください',
    'LBL_OPTION_SELECT_TEMPLATE' => '既存のテンプレートを選択してください',
    'LBL_OPTION_CREATE_TEMPLATE' => '新規にテンプレートを作成します',
    'LBL_OPTION_COPY_TEMPLATE' => '既存のテンプレートをコピーします',
    'LBL_SUMMARY' => 'サマリー',
    'LBL_CAMPAIGN_CHECKLIST' => 'キャンペーンのチェックリスト',

    'LBL_EMAIL_MARKETING' => 'Eメールマーケティング',
    'LBL_EMAIL_SUCCESS' => '成功',
    'LBL_QUEUE_ITEMS' => 'キュー アイテム',
    'LBL_PROSPECT_LISTS' => '見込みリスト',
	'LBL_SURVEYRESPONSES_CAMPAIGNS_FROM_SURVEYRESPONSES_TITLE' => '調査の回答',
	'LBL_CAMPAIGN_SURVEY' => "調査",
);
