<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Settings Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'settings' => '設定',
    'preferences' => '設定',
    'account' => 'アカウント',
    'oauth' => 'OAuth',
    'webauthn' => 'WebAuthn',
    'tokens' => 'トークン',
    'options' => '動作設定',
    'user_preferences' => 'ユーザー設定',
    'admin_settings' => '管理者設定',
    'confirm' => [

    ],
    'administration' => '管理者',
    'administration_legend' => 'ここまでの設定はユーザー設定（すべてのユーザーが個別に設定可能）ですが、以下の設定は全体設定で、すべてのユーザーに適用されます。',
    'only_an_admin_can_edit_them' => '管理者のみが閲覧および編集できます。',
    'you_are_administrator' => 'あなたは管理者です',
    'account_linked_to_sso_x_provider' => 'あなたは :provider アカウントのSSO経由でサインインしています。ここでは、:provider 以外の情報は変更できません。',
    'general' => '全般',
    'security' => 'セキュリティ',
    'profile' => 'プロフィール',
    'change_password' => 'パスワード変更',
    'personal_access_tokens' => '個人アクセストークン',
    'token_legend' => '個人アクセストークンを使用して、任意のアプリから 2Fauth API で認証することができます。 アクセストークンは、クライアントアプリからのリクエストで認証ヘッダーに Bearer トークンとして指定する必要があります。',
    'generate_new_token' => '新しいトークンを生成',
    'revoke' => '取り消し',
    'token_revoked' => 'トークンを取り消しました',
    'revoking_a_token_is_permanent' => '取り消したトークンは元に戻せません',
    'confirm' => [
        'revoke' => 'このトークンを取り消してもよろしいですか？',
    ],
    'make_sure_copy_token' => '今すぐ必ずこの個人アクセストークンをコピーしてください。このトークンは二度と表示されません。',
    'data_input' => 'データの読み込み',
    'forms' => [
        'edit_settings' => '設定を編集',
        'setting_saved' => '設定を保存しました',
        'new_token' => '新規トークン',
        'some_translation_are_missing' => 'ブラウザの設定言語で翻訳が欠けていますか？',
        'help_translate_2fauth' => '2FAuth の翻訳に協力',
        'language' => [
            'label' => '言語',
            'help' => '2FAuth のUIを表示するための言語。リストにある言語は翻訳済みです。いずれかを選択してブラウザ設定を上書きできます。'
        ],
        'show_otp_as_dot' => [
            'label' => '生成された<abbr title="ワンタイムパスワード">OTP</abbr>を●で表示',
            'help' => '生成されたパスワード文字を見られないよう ● に置き換えます。コピーペーストには影響しません。'
        ],
        'reveal_dotted_otp' => [
            'label' => '隠された<abbr title="ワンタイムパスワード">OTP</abbr>を再表示',
            'help' => '●で隠されたパスワードを一時的に表示できるようにします。'
        ],
        'close_otp_on_copy' => [
            'label' => 'コピー後に<abbr title="ワンタイムパスワード">OTP</abbr>を隠す',
            'help' => '生成されたパスワードをクリックすると、自動的に画面から非表示になります。'
        ],
        'copy_otp_on_display' => [
            'label' => '表示時に<abbr title="ワンタイムパスワード">OTP</abbr> をコピー',
            'help' => '画面に表示された瞬間に生成されたパスワードを自動的にコピーします。 ブラウザの制約により、最初の <abbr title="時間ベースワンタイムパスワード">TOTP</abbr>パスワードのみがコピーされ、更新後のものはコピーされません。'
        ],
        'use_basic_qrcode_reader' => [
            'label' => '簡略版QRコードリーダーを使用',
            'help' => 'QRコードを読み取る際に支障がある場合は、低機能ですが問題の起きにくいQRコードリーダーに切り替えることができます。'
        ],
        'display_mode' => [
            'label' => '表示モード',
            'help' => 'アカウント一覧をリストで並べるかグリッドで並べるかを選択します。'
        ],
        'password_format' => [
            'label' => 'パスワードの整形',
            'help' => '読みやすさと覚えやすさの好みに合わせて、パスワードの数字の区切り方を変更します。'
        ],
        'pair' => '2 桁ずつ',
        'pair_legend' => '数字を 2 桁ずつ区切る',
        'trio_legend' => '数字を 3 桁ずつ区切る',
        'half_legend' => '数字を前半と後半に区切る',
        'trio' => '3 桁ずつ',
        'half' => '半分ずつ',
        'grid' => 'グリッド',
        'list' => 'リスト',
        'theme' => [
            'label' => '配色',
            'help' => '配色を指定するか、システム/ブラウザ設定に任せるかを選択します。'
        ],
        'light' => 'ライト',
        'dark' => 'ダーク',
        'automatic' => '自動',
        'show_accounts_icons' => [
            'label' => 'アイコンを表示',
            'help' => 'メイン画面にアカウントのアイコンを表示します。'
        ],
        'get_official_icons' => [
            'label' => '公式アイコンを取得',
            'help' => 'アカウント追加時に2FAプロバイダの公式アイコンを取得（しようと）します。'
        ],
        'auto_lock' => [
            'label' => '自動ロック',
            'help' => 'この期間操作がないと、自動的にログアウトします。 プロキシが認証を処理していて、ログアウトURLが指定されていない場合は効果がありません。'
        ],
        'use_encryption' => [
            'label' => '機密データを保護',
            'help' => '機密データ（2 要素認証シークレットやメールアドレス）を暗号化してデータベースに保存されます。暗号化キーとなるので、.env ファイル内の APP_KEY の値（またはファイル全体）は必ずバックアップしてください。キーが失われるとデータは復号できません。',
        ],
        'default_group' => [
            'label' => '既定のグループ',
            'help' => '新規作成したアカウントが所属するグループ',
        ],
        'useDirectCapture' => [
            'label' => '選択画面を飛ばす',
            'help' => '読み込み方式を選択する画面を表示するか、直接既定の読み込み画面を開くかを選択します。',
        ],
        'defaultCaptureMode' => [
            'label' => '既定の読み込みモード',
            'help' => '「選択画面を飛ばす」を有効にした際の読み込み方式',
        ],
        'remember_active_group' => [
            'label' => 'グループフィルタを記憶',
            'help' => '次回アクセス時に最後に使用したグループフィルタを適用します。',
        ],
        'disable_registration' => [
            'label' => '登録を無効化',
            'help' => '新規ユーザー登録を停止します。これはSSOにも影響するため、新しいSSOユーザーはサインオンできません。',
        ],
        'enable_sso' => [
            'label' => 'シングルサインオン (SSO) を有効化',
            'help' => '訪問者が外部 ID のシングルサインオンを利用して認証できるようにします。',
        ],
        'otp_generation' => [
            'label' => 'パスワードの表示方式',
            'help' => '<abbr title="ワンタイムパスワード">OTP</abbr>をいつどのように表示するか設定します。<br/>',
        ],
        'otp_generation_on_request' => 'クリック/タップで',
        'otp_generation_on_request_legend' => '個別の画面で開く',
        'otp_generation_on_request_title' => 'アカウントをクリックして個別の画面でパスワードを開く',
        'otp_generation_on_home' => '常に表示',
        'otp_generation_on_home_legend' => 'ホーム画面ですべて',
        'otp_generation_on_home_title' => '何もしなくても、ホーム画面にすべてのパスワードを表示',
        'never' => 'しない',
        'on_otp_copy' => 'セキュリティコードをコピー後',
        '1_minutes' => '1 分で',
        '5_minutes' => '5 分で',
        '10_minutes' => '10 分で',
        '15_minutes' => '15 分で',
        '30_minutes' => '30 分で',
        '1_hour' => '1 時間で',
        '1_day' => '1 日で',
        'livescan' => 'QRコードスキャナー',
        'upload' => 'QRコードアップロード',
        'advanced_form' => '詳細フォーム',
    ],

];