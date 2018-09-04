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
    'LBL_MODULE_NAME' => 'ホーム',
    'LBL_NEW_FORM_TITLE' => '取引先担当者作成',
    'LBL_FIRST_NAME' => '名:',
    'LBL_LAST_NAME' => '姓:',
    'LBL_LIST_LAST_NAME' => '姓',
    'LBL_PHONE' => '電話番号:',
    'LBL_EMAIL_ADDRESS' => '電子メール:',
    'LBL_MY_PIPELINE_FORM_TITLE' => '私のパイプライン',
    'LBL_PIPELINE_FORM_TITLE' => '商談ステージ別パイプライン',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'セールス段階別　パイプライン',
    'LNK_NEW_CONTACT' => '取引先担当者作成',
    'LNK_NEW_ACCOUNT' => '取引先作成',
    'LNK_NEW_OPPORTUNITY' => '商談作成',
    'LNK_NEW_LEAD' => '潜在顧客の作成',
    'LNK_NEW_CASE' => 'ケース作成',
    'LNK_NEW_NOTE' => 'メモ作成',
    'LNK_NEW_CALL' => '電話作成',
    'LNK_NEW_EMAIL' => '電子メール作成・保存',
    'LNK_NEW_MEETING' => '会議作成',
    'LNK_NEW_TASK' => 'タスク作成',
    'LNK_NEW_BUG' => '不具合作成',
    'LBL_ADD_BUSINESSCARD' => '名刺から作成',
    'LNK_NEW_SEND_EMAIL' => '電子メール作成',
    'LBL_NO_ACCESS' => 'アクセス権限がありません。システム管理者に連絡してください。',
    'LBL_NO_RESULTS_IN_MODULE' => '-- 検索結果なし --',
    'LBL_NO_RESULTS' => '<h2>検索結果が見つかりませんでした。検索条件を変えてください。</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>検索のコツ：</h3><ul><li>検索すべきカテゴリが正しく選択されていることを確認してください。</li><li>検索条件を緩やかにしてください。</li><li>それでも検索結果が1件も見つからない場合、詳細検索を試してみてください。</li></ul>',

    'LBL_ADD_DASHLETS' => 'ダッシュレットの追加',
    'LBL_WEBSITE_TITLE' => 'Webサイト',
    'LBL_RSS_TITLE' => 'ニュースフィード',
    'LBL_CLOSE_DASHLETS' => '完了',
    'LBL_OPTIONS' => 'オプション',
    // dashlet search fields
    'LBL_TODAY' => '今日',
    'LBL_YESTERDAY' => '昨日',
    'LBL_TOMORROW' => '明日',
    'LBL_NEXT_WEEK' => '翌週',
    'LBL_LAST_7_DAYS' => '過去7日間',
    'LBL_NEXT_7_DAYS' => '次の7日間',
    'LBL_LAST_MONTH' => '先月',
    'LBL_NEXT_MONTH' => '翌月',
    'LBL_LAST_YEAR' => '昨年',
    'LBL_NEXT_YEAR' => '翌年',
    'LBL_LAST_30_DAYS' => '過去30日',
    'LBL_NEXT_30_DAYS' => '次の30日',
    'LBL_THIS_MONTH' => '今月',
    'LBL_THIS_YEAR' => '今年',

    'LBL_MODULES' => 'モジュール',
    'LBL_CHARTS' => 'チャート一覧',
    'LBL_TOOLS' => 'ツール',
    'LBL_WEB' => 'Web',
    'LBL_SEARCH_RESULTS' => '検索結果',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'モジュールビュー',
        'Portal' => 'ポータル',
        'Charts' => 'チャート一覧',
        'Tools' => 'ツール',
        'Miscellaneous' => 'その他'
    ),
    'LBL_ADDING_DASHLET' => 'SuiteCRM ダッシュレットを追加しています ...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM ダッシュレット追加',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'この SuiteCRM ダッシュレットを削除してもよろしいですか？',
    'LBL_REMOVING_DASHLET' => 'SuiteCRM ダッシュレットを削除しています ...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet removed',
    'LBL_DASHLET_CONFIGURE_GENERAL' => '一般',
    'LBL_DASHLET_CONFIGURE_FILTERS' => '絞り込み',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => '私のアイテムのみ',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'タイトル',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => '行の表示',

    'LBL_DASHLET_DELETE' => 'Delete SuiteCRM Dashlet',
    'LBL_DASHLET_REFRESH' => 'Refresh SuiteCRM Dashlet',
    'LBL_DASHLET_EDIT' => 'Edit SuiteCRM Dashlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'My CRM',
    'LBL_CLOSE_SITEMAP' => '閉じる',

    'LBL_SEARCH' => '検索',
    'LBL_CLEAR' => 'クリア',

    'LBL_BASIC_CHARTS' => '基本チャート',

    'LBL_DASHLET_SEARCH' => 'Find SuiteCRM Dashlet',

//ABOUT page
    'LBL_VERSION' => 'バージョン',
    'LBL_BUILD' => 'ビルド',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - providers of CE framework',

    'LBL_DASHLET_TITLE' => '私のサイト',
    'LBL_DASHLET_OPT_TITLE' => 'タイトル',
    'LBL_DASHLET_INCORRECT_URL' => 'ウェブサイトのロケーションに誤りがあるようです。',
    'LBL_DASHLET_OPT_URL' => 'Webサイトの場所',
    'LBL_DASHLET_OPT_HEIGHT' => 'Dashletの高さ（ピクセル）',
    'LBL_DASHLET_SUGAR_NEWS' => 'SuiteCRM News',
    'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'SuiteCRM入門',
    'LBL_BASIC_SEARCH' => 'クイック フィルター' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => '高度なフィルター' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'ホームアイコン',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Home画面へ戻る',
    'LBL_TOUR_MODULES' => '主要モジュール',
    'LBL_TOUR_MODULES_DESCRIPTION' => '全ての主要モジュール',
    'LBL_TOUR_MORE' => 'その他のモジュール',
    'LBL_TOUR_MORE_DESCRIPTION' => 'その他のモジュール',
    'LBL_TOUR_SEARCH' => 'フルテキスト検索',
    'LBL_TOUR_SEARCH_DESCRIPTION' => '便利な検索機能です。',
    'LBL_TOUR_NOTIFICATIONS' => '通知',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM application notifications would go here.',
    'LBL_TOUR_PROFILE' => 'プロファイル',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'プロファイルへのアクセス、設定やログアウト',
    'LBL_TOUR_QUICKCREATE' => 'クイック作成',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Quickly create records without losing your place.',
    'LBL_TOUR_FOOTER' => '折りたたみ式フッター',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'このフッターは簡単に展開・閉じることができます。',
    'LBL_TOUR_CUSTOM' => 'カスタムアプリケーション',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'カスタムインテグレーション',
    'LBL_TOUR_BRAND' => 'ブランド',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'あなたのロゴはここに配置されます。',
    'LBL_TOUR_WELCOME' => 'Ameyo-J x SuiteCRMへようこそ',
    'LBL_TOUR_WATCH' => 'SuiteCRMの最新情報を見る',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">新しくシンプルになったナビゲーションバー</li><li class="icon-ok">新しい折りたたみ式フッター</li><li class="icon-ok">Improved Search</li><li class="icon-ok">Updated actions menu</li></ul><p>その他多数</p>',
    'LBL_TOUR_VISIT' => 'For more information please visit our application',
    'LBL_TOUR_DONE' => '完了！',
    'LBL_TOUR_REFERENCE_1' => 'プロファイルタブ内、"サポート"より',
    'LBL_TOUR_REFERENCE_2' => 'いつでも参照可能です。',
    'LNK_TOUR_DOCUMENTATION' => 'ドキュメント',
    'LBL_TOUR_CALENDAR_URL_1' => 'Do you share your SuiteCRM calendar with 3rd party applications, such as Microsoft Outlook or Exchange? If so, you have a new URL. This new, more secure URL includes a personal key which will prevent unauthorized publishing of your calendar.',
    'LBL_TOUR_CALENDAR_URL_2' => '新しい共有カレンダーURLの取り込み',
    'LBL_CONTRIBUTORS' => 'Contributors',
    'LBL_ABOUT_SUITE' => 'About SuiteCRM',
    'LBL_PARTNERS' => 'Partners',
    'LBL_FEATURING' => 'AOS, AOW, AOR, AOP, AOE and Reschedule modules by SalesAgility.',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Open source CRM for the world',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite by Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps by Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM LOGO Provided by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM 7.3 release by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow Calculated Fields contributed by diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'About SuiteCRM Translations',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Collaborative translation by the SuiteCRM Community',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Translation created using Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM is published under an open source licence - AGPLv3',
    'LBL_ABOUT_SUITE_4' => 'All SuiteCRM code managed and developed by the project will be released as open source - AGPLv3',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM support is available in both free and paid-for options',

    'LBL_SUITE_PARTNERS' => 'We have loyal SuiteCRM partners who are passionate about open source. To view our full partner list, see our website.',

    'LBL_SAVE_BUTTON' => '新しいグループフォルダを追加',
    'LBL_DELETE_BUTTON' => '削除',
    'LBL_APPLY_BUTTON' => '適用',
    'LBL_SEND_INVITES' => '保存 & 招待',
    'LBL_CANCEL_BUTTON' => 'キャンセル',
    'LBL_CLOSE_BUTTON' => '閉じる',

    'LBL_CREATE_NEW_RECORD' => '活動作成',
    'LBL_CREATE_CALL' => 'コール作成',
    'LBL_CREATE_MEETING' => 'ミーティング作成',

    'LBL_GENERAL_TAB' => '詳細',
    'LBL_PARTICIPANTS_TAB' => '招待者',
    'LBL_REPEAT_TAB' => 'リピート',

    'LBL_REPEAT_TYPE' => 'リピート',
    'LBL_REPEAT_INTERVAL' => '毎',
    'LBL_REPEAT_END' => '最後',
    'LBL_REPEAT_END_AFTER' => '以後',
    'LBL_REPEAT_OCCURRENCES' => '繰り返し',
    'LBL_REPEAT_END_BY' => 'By',
    'LBL_REPEAT_DOW' => 'オン',
    'LBL_REPEAT_UNTIL' => '～まで繰り返す',
    'LBL_REPEAT_COUNT' => '回数',
    'LBL_REPEAT_LIMIT_ERROR' => ' $limit を超える数のミーティングを作成できません',

    //Events PR 5641
    'LNK_EVENT' => 'イベント',
    'LNK_EVENT_VIEW' => 'イベントを表示',
    'LBL_DATE' => 'Date: ',
    'LBL_DURATION' => 'Duration: ',
    'LBL_NAME' => 'タイトル: ',
    'LBL_HOUR_ABBREV' => '時',
    'LBL_HOURS_ABBREV' => 'hours',
    'LBL_MINSS_ABBREV' => '分',
    'LBL_LOCATION' => '場所: ',
    'LBL_STATUS' => 'ステータス: ',
    'LBL_DESCRIPTION' => '詳細: ',
    //End Events
);
