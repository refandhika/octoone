<?php return [
  'auth' => [
    'title' => 'Administrace',
  ],
  'field' => [
    'invalid_type' => 'Byl použitý špatný typ :type.',
    'options_method_invalid_model' => 'Vlastnost \':field\' neodpovídá platnému modelu. Zkuste specifikovat metodu voleb pro modelovou třídu :model explicitně.',
    'options_method_not_exists' => 'Modelová třída :model musí implementovat metodu :method(), která vrací volby pro formulářové pole \':field\'',
  ],
  'widget' => [
    'not_registered' => 'Třída widgetu se jménem \':name\' není zaregistrovaná.',
    'not_bound' => 'Widget s názvem třídy \':name\' není navázaná na kontroler.',
  ],
  'page' => [
    'untitled' => 'Bez názvu',
    'access_denied' => [
      'label' => 'Přístup odmítnut',
      'help' => 'Nemáte potřebná oprávnění k prohlížení této stránky.',
      'cms_link' => 'Zpět do administrace',
    ],
    'no_database' => [
      'label' => 'Chybí databáze',
      'help' => 'K přístupu do administrace je zapotřebí databáze. Zkontrolujte, zda je databáze nakonfigurována a migrována a zkuste to znovu.',
      'cms_link' => 'Zpět na úvodní stránku',
    ],
  ],
  'partial' => [
    'not_found_name' => 'Dílčí šablona \':name\' nebyla nalezena.',
  ],
  'account' => [
    'sign_out' => 'Odhlásit',
    'login' => 'Přihlásit se',
    'reset' => 'Resetovat',
    'restore' => 'Obnovit',
    'login_placeholder' => 'Přihlašovací jméno',
    'password_placeholder' => 'Heslo',
    'remember_me' => 'Zůstat přihlášený',
    'forgot_password' => 'Zapomněli jste heslo?',
    'enter_email' => 'Zadejte váš e-mail',
    'enter_login' => 'Zadejte váš login',
    'email_placeholder' => 'E-mail',
    'enter_new_password' => 'Zadejte nové heslo',
    'password_reset' => 'Obnova hesla',
    'restore_success' => 'E-mail byl zaslán na vaší e-mailovou adresu s heslem a instrukcemi k obnově.',
    'restore_error' => 'Uživatel s přihlašovacím jménem \':login\' nebyl nalezen',
    'reset_success' => 'Vaše heslo bylo úspěšně obnoveno. Nyní se můžete přihlásit.',
    'reset_error' => 'Data pro obnovu hesla nejsou správná. Prosím zkuste to znovu!',
    'reset_fail' => 'Obnova hesla selhala!',
    'apply' => 'Použít',
    'cancel' => 'Zrušit',
    'delete' => 'Smazat',
    'ok' => 'OK',
  ],
  'dashboard' => [
    'menu_label' => 'Plocha',
    'widget_label' => 'Widget',
    'widget_width' => 'Šířka',
    'full_width' => 'Plná šířka',
    'manage_widgets' => 'Správa widgetů',
    'add_widget' => 'Přidat widget',
    'widget_inspector_title' => 'Nastavení widgetu',
    'widget_inspector_description' => 'Zde si upravte všechna nastavení widgetu',
    'widget_columns_label' => 'Šířka :columns',
    'widget_columns_description' => 'Šířka widgetu, zadejte číslo mezi 1 a 10.',
    'widget_columns_error' => 'Zadejte prosím šířku widgetu jako číslo mezi 1 a 10.',
    'columns' => '{1} sloupec|[2,Inf] sloupce',
    'widget_new_row_label' => 'Vždy na novém řádku',
    'widget_new_row_description' => 'Vloží widget do nového řádku',
    'widget_title_label' => 'Název widgetu',
    'widget_title_error' => 'Musíte zadat název widgetu',
    'reset_layout' => 'Obnovit výchozí uspořádání',
    'reset_layout_confirm' => 'Skutečně obnovit výchozí uspořádání?',
    'reset_layout_success' => 'Výchozí uspořádání bylo obnoveno',
    'make_default' => 'Nastavit jako výchozí',
    'make_default_confirm' => 'Nastavit aktuální uspořádání jako výchozí?',
    'make_default_success' => 'Aktuální uspořádání je nyní nastaveno jako výchozí',
    'collapse_all' => 'Vše sbalit',
    'expand_all' => 'Vše rozbalit',
    'status' => [
      'widget_title_default' => 'Stav systému',
      'update_available' => '{0} dostupných aktualizací!|{1} dostupná aktualizace!|[2,Inf] dostupných aktualizací!',
      'updates_pending' => 'Jsou dostupné aktualizace softwaru',
      'updates_nil' => 'Software je aktuální',
      'updates_link' => 'Aktualizovat',
      'warnings_pending' => 'Některé problémy vyžadují pozornost',
      'warnings_nil' => 'Žádné varování k zobrazení',
      'warnings_link' => 'Zobrazit',
      'core_build' => 'Verze systému',
      'event_log' => 'Protokol událostí',
      'request_log' => 'Protokol požadavků',
      'app_birthday' => 'Online od',
    ],
    'welcome' => [
      'widget_title_default' => 'Vítejte',
      'welcome_back_name' => 'Vítejte zpět do :app, :name.',
      'welcome_to_name' => 'Vítejte do :app, :name.',
      'first_sign_in' => 'Toto je vaše první přihlášení.',
      'last_sign_in' => 'Vaše poslední přihlášení bylo',
      'view_access_logs' => 'Zobrazit protokol přihlášení',
      'nice_message' => 'Hezký den!',
    ],
  ],
  'user' => [
    'name' => 'Administrátor',
    'menu_label' => 'Administrátoři',
    'menu_description' => 'Správa uživatelů administrace, jejich skupin a opravnění.',
    'list_title' => 'Správa administrátorů',
    'new' => 'Nový administrátor',
    'login' => 'Přihlašovací jméno',
    'first_name' => 'Křestní jméno',
    'last_name' => 'Příjmení',
    'full_name' => 'Celé jméno',
    'email' => 'E-mail',
    'role_field' => 'Role',
    'role_comment' => 'Role definují uživatelská oprávnění, která mohou být přepsána na uživatelské úrovni, na kartě Oprávnění.',
    'groups' => 'Skupiny',
    'groups_comment' => 'Vyberte do jakých skupin uživatel patří.',
    'avatar' => 'Avatar',
    'password' => 'Heslo',
    'password_confirmation' => 'Potvrzení hesla',
    'permissions' => 'Oprávnění',
    'account' => 'Účet',
    'superuser' => 'Super uživatel',
    'superuser_comment' => 'Má neomezený přístup do všech stránek administrace.',
    'send_invite' => 'Zaslat pozvánku e-mailem',
    'send_invite_comment' => 'Odešle uvítací e-mail s údaji pro přihlášení.',
    'delete_confirm' => 'Opravdu chcete smazat tohoto administrátora?',
    'return' => 'Zpět na seznam administrátorů',
    'allow' => 'Povolit',
    'inherit' => 'Podědit',
    'deny' => 'Odmítnout',
    'activated' => 'Aktivován',
    'last_login' => 'Poslední přihlášení',
    'created_at' => 'Vytvořen',
    'updated_at' => 'Aktualizován',
    'group' => [
      'name' => 'Skupina',
      'name_field' => 'Jméno',
      'name_comment' => 'Toto jméno je zobrazeno v seznamu skupin na formuláři správce.',
      'description_field' => 'Popis',
      'is_new_user_default_field_label' => 'Výchozí skupina',
      'is_new_user_default_field_comment' => 'Zařadit nové administrátory automaticky do této skupiny',
      'code_field' => 'Kód',
      'code_comment' => 'Zadejte unikátní kód pro přístup přes API.',
      'menu_label' => 'Skupiny',
      'list_title' => 'Správa skupin',
      'new' => 'Nová skupina',
      'delete_confirm' => 'Opravdu chcete smazat tuto skupinu administrátorů?',
      'return' => 'Zpět na seznam skupin',
      'users_count' => 'Uživatelů',
    ],
    'role' => [
      'name' => 'Role',
      'name_field' => 'Jméno',
      'name_comment' => 'Toto jméno je zobrazeno v seznamu skupin na formuláři správce.',
      'description_field' => 'Popis',
      'code_field' => 'Kód',
      'code_comment' => 'Zadejte unikátní kód pro přístup přes API.',
      'menu_label' => 'Role',
      'list_title' => 'Správa rolí',
      'new' => 'Nová role',
      'delete_confirm' => 'Opravdu chcete smazat tuto roli?',
      'return' => 'Zpět na seznam rolí',
      'users_count' => 'Uživatelů',
    ],
    'preferences' => [
      'not_authenticated' => 'Nebyl nalezen žádný přihlášený uživatel pro načtení, nebo uložení nastavení.',
    ],
  ],
  'list' => [
    'default_title' => 'Seznam',
    'search_prompt' => 'Hledat...',
    'no_records' => 'Žádné záznamy v tomto pohledu.',
    'missing_model' => 'Chování seznamu použité v :class nemá definovaný model.',
    'missing_column' => 'Neexistují žádné definice sloupců pro :columns.',
    'missing_columns' => 'Seznam použitý v :class nemá defonované žádné sloupce.',
    'missing_definition' => 'Chování seznamu neobsahuje sloupec pro \':field\'.',
    'missing_parent_definition' => 'Chování seznamu neobsahuje definici \':definition\'.',
    'behavior_not_ready' => 'Chování seznamu nebylo inicializováno. Zkontrolujte, zda jste ve svém controlleru zavolali makeLists().',
    'invalid_column_datetime' => 'Hodnota sloupce \':column\' není objekt typu DateTime. Nechybí vám odkaz $dates ve vašem Modelu?',
    'pagination' => 'Zobrazuji záznamy: :from-:to z :total',
    'first_page' => 'První stránka',
    'last_page' => 'Poslední stránka',
    'prev_page' => 'Předchozí stránka',
    'next_page' => 'Další stránka',
    'refresh' => 'Obnovit',
    'updating' => 'Aktualizuji...',
    'loading' => 'Načítám...',
    'setup_title' => 'Nastavení výpisu',
    'setup_help' => 'Pomocí checkboxů si vyberte, které sloupce chcete ve výpisu vidět. Pozici změníte chytnutím a posunem nahorů, nebo dolů.',
    'records_per_page' => 'Záznamů na stránku',
    'records_per_page_help' => 'Vyberte kolik chcete vidět záznamů na jedné stránce. Vysoký počet záznamů může negativně ovlivnit rychlost stránek.',
    'check' => 'Zaškrtnout',
    'delete_selected' => 'Smazat vybrané záznamy',
    'delete_selected_empty' => 'Nebyly vybrány žádné záznamy ke smazání.',
    'delete_selected_confirm' => 'Opravdu chcete smazat vybrané záznamy?',
    'delete_selected_success' => 'Vybrané záznamy byly smazány.',
    'column_switch_true' => 'Ano',
    'column_switch_false' => 'Ne',
  ],
  'fileupload' => [
    'attachment' => 'Příloha',
    'help' => 'Přidat název a popisek k příloze.',
    'title_label' => 'Název',
    'description_label' => 'Popis',
    'default_prompt' => 'Kliknutím na %s nebo přetažením na toto místo můžete soubor nahrát',
    'attachment_url' => 'URL přílohy',
    'upload_file' => 'Nahrát soubor',
    'upload_error' => 'Chyba nahrávání',
    'remove_confirm' => 'Jste si jistí?',
    'remove_file' => 'Odstranit soubor',
  ],
  'form' => [
    'create_title' => 'Nový :name',
    'update_title' => 'Upravit :name',
    'preview_title' => 'Náhled :name',
    'create_success' => ':name byl úspěšně vytvořen',
    'update_success' => ':name byl úspěšně upraven',
    'delete_success' => ':name byl úspěšně smazán',
    'reset_success' => 'Úspěšně obnoveno',
    'missing_id' => 'Musíte uvést ID záznamu.',
    'missing_model' => 'Chování formuláře použité v :class nemá definovaný model.',
    'missing_definition' => 'Chování formuláře neobsahuje pole pro \':field\'.',
    'not_found' => 'Záznam formuláře s ID :id nebyl nalezen.',
    'action_confirm' => 'Jste si jistí?',
    'create' => 'Vytvořit',
    'create_and_close' => 'Vytvořit a zavřít',
    'creating' => 'Vytváření...',
    'creating_name' => 'Vytváření :name...',
    'save' => 'Uložit',
    'save_and_close' => 'Uložit a zavřít',
    'saving' => 'Ukládání...',
    'saving_name' => 'Ukládání :name...',
    'delete' => 'Smazat',
    'deleting' => 'Mazání...',
    'confirm_delete' => 'Opravdu chcete smazat záznam?',
    'confirm_delete_multiple' => 'Opravdu chcete smazat vybrané záznamy?',
    'deleting_name' => 'Mazání :name...',
    'reset_default' => 'Obnovit výchozí',
    'resetting' => 'Obnovování',
    'resetting_name' => 'Obnovování :name',
    'undefined_tab' => 'Ostatní',
    'field_off' => 'Vyp',
    'field_on' => 'Zap',
    'add' => 'Přidat',
    'apply' => 'Použít',
    'cancel' => 'Zrušit',
    'close' => 'Zavřít',
    'confirm' => 'Potvrdit',
    'reload' => 'Znovu načíst',
    'complete' => 'Kompletní',
    'ok' => 'OK',
    'or' => 'nebo',
    'confirm_tab_close' => 'Opravdu chcete zavřít záložku? Neuložené změny budou ztraceny.',
    'behavior_not_ready' => 'Chování formuláře není inicializováno, zkontrolujte jestli voláte metodu initForm() ve vašem kontroléru.',
    'preview_no_files_message' => 'Žádný soubor nebyl nahrán.',
    'preview_no_media_message' => 'Žádné médium nebylo vybráno.',
    'preview_no_record_message' => 'Žádný záznam není vybraný.',
    'select' => 'Vybrat',
    'select_all' => 'vybrat vše',
    'select_none' => 'vyberte žádný',
    'select_placeholder' => 'Prosím vyberte',
    'insert_row' => 'Vložit řádek',
    'insert_row_below' => 'Vložit řádek pod',
    'delete_row' => 'Smazat řádek',
    'concurrency_file_changed_title' => 'Soubor byl změněn',
    'concurrency_file_changed_description' => 'Soubor, který upravujete, byl na disku změněn jiným uživatelem. Můžete buď znovu načíst soubor a ztratit změny, nebo přepsat soubor na disku.',
    'return_to_list' => 'Zpět na seznam',
  ],
  'recordfinder' => [
    'find_record' => 'Najít záznam',
    'cancel' => 'Zrušit',
  ],
  'pagelist' => [
    'page_link' => 'Odkaz na stránku',
    'select_page' => 'vyberte stránku...',
  ],
  'relation' => [
    'missing_config' => 'Chování relace nemá žádné nastavení pro \':config\'.',
    'missing_definition' => 'Chování relace neobsahuje definici pro \':field\'.',
    'missing_model' => 'Chování relace použité v :class nemá definovaný žádný model.',
    'invalid_action_single' => 'Tato akce nemůže být provedena na jednoduché relaci (singular relationship).',
    'invalid_action_multi' => 'Tato akce nemůže být provedena na vícenásobné relaci (multiple relationship).',
    'help' => 'Pro přidání klikněte na položku',
    'related_data' => 'Související data pro :name',
    'add' => 'Přidat',
    'add_selected' => 'Přidat vybrané',
    'add_a_new' => 'Přidat nový :name',
    'link_selected' => 'Vytvořit vazbu na vybrané',
    'link_a_new' => 'Vytvořit novou vazbu na :name',
    'cancel' => 'Zrušit',
    'close' => 'Zavřít',
    'add_name' => 'Přidat :name',
    'create' => 'Vytvořit',
    'create_name' => 'Vytvořit :name',
    'update' => 'Upravit',
    'update_name' => 'Upravit :name',
    'preview' => 'Náhled',
    'preview_name' => 'Náhled :name',
    'remove' => 'Odstranit',
    'remove_name' => 'Odstranit :name',
    'delete' => 'Smazat',
    'delete_name' => 'Smazat :name',
    'delete_confirm' => 'Jste si jistí?',
    'link' => 'Vazba',
    'link_name' => 'Vazba :name',
    'unlink' => 'Zrušit vazbu',
    'unlink_name' => 'Zrušit vazbu :name',
    'unlink_confirm' => 'Jste si jistí?',
  ],
  'reorder' => [
    'default_title' => 'Seřadit záznamy',
    'no_records' => 'Nenašli jsme žádné záznamy k seřazení.',
  ],
  'model' => [
    'name' => 'Model',
    'not_found' => 'Model \':class\' s ID :id nebyl nalezen',
    'missing_id' => 'Není specifikované ID pro hledání záznamu v modelu.',
    'missing_relation' => 'Model \':class\' neobsahuje definici pro \':relation\'.',
    'missing_method' => 'Model \':class\' nemá implementovanou metodu \':method\'.',
    'invalid_class' => 'Model :model použitý ve třídě :class není validní, musí dědit ze třídy Model.',
    'mass_assignment_failed' => 'Hromadné přiřazení selhalo pro vlastnost \':attribute\'.',
  ],
  'warnings' => [
    'tips' => 'Tipy pro konfiguraci systému',
    'tips_description' => 'Existují problémy, které vyžadují vaši pozornost, aby byl systém správně nakonfigurován.',
    'permissions' => 'Do adresáře :name nebo jeho podadresářů nelze zapisovat z PHP. Prosím nastavte správná oprávnění.',
    'extension' => 'PHP rozšíření :name není nainstalováno. Prosím nainstalujte toto rozšíření a aktivujte ho.',
    'plugin_missing' => 'Plugin :name je vyžadován, ale není nainstalovaný. Prosím nainstalujte tento plugin.',
  ],
  'editor' => [
    'menu_label' => 'Nastavení editoru kódu',
    'menu_description' => 'Nastavení editoru kódu, velikosti písma a barevného schématu.',
    'font_size' => 'Velikost písma',
    'tab_size' => 'Počet znaků odsazení',
    'use_hard_tabs' => 'Odsazení tabulátory',
    'code_folding' => 'Skládání kódu',
    'code_folding_begin' => 'Označit začátek',
    'code_folding_begin_end' => 'Označit začátek a konec',
    'autocompletion' => 'Automatické doplňování',
    'word_wrap' => 'Zalamování slov',
    'highlight_active_line' => 'Zvýraznit aktivní řádel',
    'auto_closing' => 'Automaticky uzavírat značky',
    'show_invisibles' => 'Zobrazit neviditelné znaky',
    'show_gutter' => 'Zobrazit kurzor',
    'basic_autocompletion' => 'Základní automatické doplňování (Ctrl + Space)',
    'live_autocompletion' => 'Živé automatické doplňování',
    'enable_snippets' => 'Povolte úryvky (snippets) kódu (Tab)',
    'display_indent_guides' => 'Zobrazit vodítka odsazení',
    'show_print_margin' => 'Zobrazit okraje tisku',
    'mode_off' => 'Vypnout',
    'mode_fluid' => 'Plynulý (fluid)',
    '40_characters' => '40 znaků',
    '80_characters' => '80 znaků',
    'theme' => 'Barevné schéma',
    'markup_styles' => 'Styly',
    'custom_styles' => 'Vlastní styly',
    'custom styles_comment' => 'Vlastní styly, které chcete zahrnout do editoru HTML.',
    'markup_classes' => 'Třídy stylů',
    'paragraph' => 'Odstavec',
    'link' => 'Odkaz',
    'table' => 'Tabulka',
    'table_cell' => 'Buňka tabulky',
    'image' => 'Obrázek',
    'label' => 'Popisek',
    'class_name' => 'Název třídy',
    'markup_tags' => 'Značky',
    'allowed_empty_tags' => 'Povolené prázdné značky',
    'allowed_empty_tags_comment' => 'Seznam značek, které nejsou odstraněny, pokud neobsahují žádný obsah.',
    'allowed_tags' => 'Povolené značky',
    'allowed_tags_comment' => 'Seznam povolených značek.',
    'no_wrap' => 'Nezabalovat tyto značky',
    'no_wrap_comment' => 'Seznam značek, které by neměly být zabaleny uvnitř blokových značek.',
    'remove_tags' => 'Odstranit značky',
    'remove_tags_comment' => 'Seznam značek, které jsou odstraněny spolu s jejich obsahem.',
    'toolbar_buttons' => 'Tlačítka na panelu nástrojů',
    'toolbar_buttons_comment' => 'Seznam výchozích tlačítek na panelů nástrojů textového editoru.',
  ],
  'tooltips' => [
    'preview_website' => 'Náhled stránek',
  ],
  'mysettings' => [
    'menu_label' => 'Moje nastavení',
    'menu_description' => 'Nastavení vašeho administrátorského účtu',
  ],
  'myaccount' => [
    'menu_label' => 'Můj účet',
    'menu_description' => 'Nastavte si svoje jméno, e-mailovou adresu a heslo.',
    'menu_keywords' => 'bezpečnost login',
  ],
  'branding' => [
    'menu_label' => 'Nastavení administrace',
    'menu_description' => 'Nastavte si název, logo a barvy použité v administraci.',
    'brand' => 'Značka',
    'logo' => 'Logo',
    'logo_description' => 'Nahrajte vlastní logo, které bude použité v administraci.',
    'app_name' => 'Jméno aplikace',
    'app_name_description' => 'Toto jméno se zobrazí v titulní liště stránek.',
    'app_tagline' => 'Motto aplikace',
    'app_tagline_description' => 'Toto motto se zobrazí na přihlašovací stránce administrace.',
    'colors' => 'Barvy',
    'primary_color' => 'Primární barva',
    'secondary_color' => 'Sekundární barva',
    'accent_color' => 'Barva pro zvýraznění',
    'styles' => 'Styly',
    'custom_stylesheet' => 'Vlastní kaskádové styly',
    'navigation' => 'Navigace',
    'menu_mode' => 'Styl menu',
    'menu_mode_inline' => 'V řádku',
    'menu_mode_tile' => 'V dlaždicích',
    'menu_mode_collapsed' => 'Sbalené',
  ],
  'backend_preferences' => [
    'menu_label' => 'Nastavení administrace',
    'menu_description' => 'Spravujte nastavení svého uživatelského účtu, jako je například jazyk apod.',
    'region' => 'Oblast',
    'code_editor' => 'Editor kódu',
    'timezone' => 'Časová zóna',
    'timezone_comment' => 'Upraví zobrazení času a data podle této časové zóny.',
    'locale' => 'Jazyk',
    'locale_comment' => 'Vyberte jazyk administrace.',
  ],
  'access_log' => [
    'hint' => 'Tento záznam zobrazuje seznam úspěšných přihlášení do administrace. Záznamy jsou uchovávány :days dní.',
    'menu_label' => 'Protokol přístupů',
    'menu_description' => 'Zobrazit seznam úspěšných přihlášení do administrace.',
    'created_at' => 'Datum & čas',
    'login' => 'Login',
    'ip_address' => 'IP adresa',
    'first_name' => 'Jméno',
    'last_name' => 'Příjmení',
    'email' => 'E-mail',
  ],
  'filter' => [
    'all' => 'Vše',
    'options_method_not_exists' => 'Třída modelu :model musí definovat metodu :method(), která vrací položky filtru \':filter\'.',
    'date_all' => 'Všechna období',
  ],
  'import_export' => [
    'show_ignored_columns' => 'Zobrazit ignorované sloupce',
    'auto_match_columns' => 'Vytvořit vazby automaticky',
    'created' => 'Vytvořeno',
    'updated' => 'Aktualizováno',
    'skipped' => 'Přeskočeno',
    'warnings' => 'Upozornění',
    'errors' => 'S chybou',
    'skipped_rows' => 'Přeskočené řádky',
    'upload_valid_csv' => 'Nahrajte prosím platný soubor CSV.',
    'drop_column_here' => 'Sem přetáhněte sloupec...',
    'ignore_this_column' => 'Ignorovat tento sloupec',
    'processing_successful_line1' => 'Export byl dokončen!',
    'processing_successful_line2' => 'Prohlížeč vás nyní přesměruje na stránku pro stažení souboru.',
    'file_not_found_error' => 'Soubor nebyl nalezen',
    'empty_error' => 'Nebyly nalezeny žádné záznamy pro export',
    'empty_import_columns_error' => 'Prosím vyberte sloupce pro import.',
    'match_some_column_error' => 'Prosím vytvořte vazbu mezi sloupci.',
    'required_match_column_error' => 'Prosím vytvořte vazbu pro vyžadovaný sloupec :label.',
    'empty_export_columns_error' => 'Prosím vyberte sloupce pro export.',
    'behavior_missing_uselist_error' => 'Musíte implementovat chování controlleru ListController s povolenou vlastností "useList".',
    'missing_model_class_error' => 'Prosím specifikujte vlastnost třídy pro :type',
    'missing_column_id_error' => 'Chybí identifikátor sloupce',
    'unknown_column_error' => 'neznámý sloupec',
    'encoding_not_supported_error' => 'Kódování zdrojového souboru není rozpoznáno. Zvolte volbu formátu souboru s vlastním kódováním pro import souboru.',
  ],
  'permissions' => [
    'manage_media' => 'Správa médií',
  ],
  'mediafinder' => [
    'label' => 'Vyhledávač médií',
    'default_prompt' => 'Klikněte na tlačítko %s pro hledání souboru',
  ],
  'media' => [
    'menu_label' => 'Média',
    'upload' => 'Nahrát',
    'move' => 'Přesunout',
    'delete' => 'Smazat',
    'add_folder' => 'Přidat složku',
    'search' => 'Vyhledat',
    'display' => 'Zobrazit',
    'filter_everything' => 'Vše',
    'filter_images' => 'Obrázky',
    'filter_video' => 'Video',
    'filter_audio' => 'Audio',
    'filter_documents' => 'Dokumenty',
    'library' => 'Knihovna',
    'size' => 'Velikost',
    'title' => 'Název',
    'last_modified' => 'Naposledy upraveno',
    'public_url' => 'Veřejná URL',
    'click_here' => 'Klikněte zde',
    'thumbnail_error' => 'Chyba generování náhledu.',
    'return_to_parent' => 'Zpět do nadřazené složky',
    'return_to_parent_label' => 'Nahoru ..',
    'nothing_selected' => 'Nic nevybráno.',
    'multiple_selected' => 'Vybráno více položek.',
    'uploading_file_num' => 'Nahrávám :number soubor(y)...',
    'uploading_complete' => 'Nahrávání kompletní',
    'uploading_error' => 'Nahrávání se nezdařilo',
    'type_blocked' => 'Kvůli bezpečnosti je tento typ souborů zablokován.',
    'order_by' => 'Seřadit dle',
    'folder' => 'Složka',
    'no_files_found' => 'Pro tento požadavek nebyly nalezeny žádné soubory.',
    'delete_empty' => 'Vyberte položky ke smazání.',
    'delete_confirm' => 'Opravu chcete smazat vybrané položky?',
    'error_renaming_file' => 'Přejmenování se nezdařilo.',
    'new_folder_title' => 'Nová složka',
    'folder_name' => 'Název složky',
    'error_creating_folder' => 'Chyba vytváření složky',
    'folder_or_file_exist' => 'Adresář nebo soubor se zadaným názvem již existuje.',
    'move_empty' => 'Vyberte položky k přesunutí.',
    'move_popup_title' => 'Přesun souborů nebo složek',
    'move_destination' => 'Cílová složka',
    'please_select_move_dest' => 'Prosím vyberte cílovou složku.',
    'move_dest_src_match' => 'Prosím vyberte jinou cílovou složku.',
    'empty_library' => 'Knihovna médií je prázdná. Nahrajte prosím soubory, nebo vytvořte složky.',
    'insert' => 'Vložit',
    'crop_and_insert' => 'Oříznout & vložit',
    'select_single_image' => 'Prosím vyberte pouze jeden obrázek.',
    'selection_not_image' => 'Vybraná položka není obrázek.',
    'restore' => 'Zpět všechny změny',
    'resize' => 'Změnit velikost...',
    'selection_mode_normal' => 'Normální',
    'selection_mode_fixed_ratio' => 'Pevný poměr stran',
    'selection_mode_fixed_size' => 'Pevná velikost',
    'height' => 'Výška',
    'width' => 'Šířka',
    'selection_mode' => 'Způsob označování (selection mode)',
    'resize_image' => 'Změnit velikost obrázku',
    'image_size' => 'Velikost obrázku:',
    'selected_size' => 'Vybráno:',
  ],
];