<?php

return [
    'ad'				        => 'Direktori Berkas',
    'ad_domain'				    => 'Domain Direktori Aktif',
    'ad_domain_help'			=> 'Terkadang ini sama dengan domain email anda, tapi tidak selalu.',
    'ad_append_domain_label'    => 'Append domain name',
    'ad_append_domain'          => 'Append domain name to username field',
    'ad_append_domain_help'     => 'User isn\'t required to write "username@domain.local", they can just type "username".',
    'admin_cc_email'            => 'Tembusan Email',
    'admin_cc_email_help'       => 'Jika Anda ingin mengirim salinan email checkin / checkout yang dikirimkan ke pengguna akun email tambahan, masukkan di sini. Jika tidak, biarkan bidang ini kosong.',
    'is_ad'				        => 'Ini adalah server aktif direktori',
    'alert_email'				=> 'Kirim peringatan kepada',
    'alerts_enabled'			=> 'Peringatan Email Diaktifkan',
    'alert_interval'			=> 'Ambang batas waktu kadaluwarsa (dalam beberapa hari)',
    'alert_inv_threshold'		=> 'Ambang Batas Invertaris',
    'allow_user_skin'           => 'Allow user skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.',
    'asset_ids'					=> 'ID Aset',
    'audit_interval'            => 'Memeriksa perbedaan',
    'audit_interval_help'       => 'Jika anda diminta untuk melakukan audit aset secara fisik dengan teratur, maka masukkan selang waktu dalam beberapa bulan.',
    'audit_warning_days'        => 'Ambang Peringatan Audit',
    'audit_warning_days_help'   => 'Berapa hari sebelum kami harus memperingatkan aset yang akan dilelang?',
    'auto_increment_assets'		=> 'Buat peningkatan ID otomatis',
    'auto_increment_prefix'		=> 'Awalan (opsional)',
    'auto_incrementing_help'    => 'Aktifkan aset peningkatan ID terlebih dahulu untuk mengatur ini',
    'backups'					=> 'Cadangkan',
    'barcode_settings'			=> 'Pengaturan Kode batang',
    'confirm_purge'			    => 'Konfirmasi Pembersihan',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> 'Kustom CSS',
    'custom_css_help'			=> 'Masukkan setiap penimpaan CSS ubah sesuai yang ingin anda gunakan jangan sertakan&lt;gaya&lt;/gaya&gt;tag.',
    'custom_forgot_pass_url'	=> 'Atur Ulang Kata Sandi URL tempahan',
    'custom_forgot_pass_url_help'	=> 'Ini menggantikan URL lupa sandi bawaan dilayar masuk, berguna untuk mengarahkan orang ke fungsi penyetelan ulang kata sandi bawaan internal atau yang dihost. Ini akan secara efektif menonaktifkan pengguna lupa fungsi kata sandi.',
    'dashboard_message'			=> 'Pesan Beranda',
    'dashboard_message_help'	=> 'Tulisan ini akan muncul di beranda bagi siapa saja yang memiliki izin untuk melihat beranda.',
    'default_currency'  		=> 'Mata Uang bawaan',
    'default_eula_text'			=> 'EULA bawaan',
    'default_language'			=> 'Bahasa Dasar',
    'default_eula_help_text'	=> 'Anda juga dapat mengaitkan EULA kastom dengan kategori aset tertentu.',
    'display_asset_name'        => 'Tampilan nama aset',
    'display_checkout_date'     => 'Tampilan tanggal keluar',
    'display_eol'               => 'Tampilkan EOL dalam tampilan tabel',
    'display_qr'                => 'Kode Tampilan Persegi',
    'display_alt_barcode'		=> 'Tampilkan kode batang 1D',
    'email_logo'                => 'Email Logo',
    'barcode_type'				=> 'Tipe Kode Batang 2D',
    'alt_barcode_type'			=> 'Tipe Kode Batang 1D',
    'email_logo_size'       => 'Square logos in email look best. ',
    'eula_settings'				=> 'Pengaturan EULA',
    'eula_markdown'				=> 'EULA ini memungkinkan <a href="https://help.github.com/articles/github-flavored-markdown/">Github merasakan penurunan harga</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Accepted filetypes are ico, png, and gif. Other image formats may not work in all browsers.',
    'favicon_size'          => 'Favicons should be square images, 16x16 pixels.',
    'footer_text'               => 'Teks Footer Tambahan ',
    'footer_text_help'          => 'Teks ini akan muncul di footer sisi kanan. Tautan diizinkan menggunakan <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Jeda, tajuk, gambar, dll bisa mengakibatkan hasil yang tidak dapat diprediksi.',
    'general_settings'			=> 'Pengaturan Umum',
    'generate_backup'			=> 'Membuat Cadangan',
    'header_color'              => 'Warna Header',
    'info'                      => 'Penggaturan ini memungkinkan anda menyesuaikan aspek-aspek tertentu dari instalasi anda.',
    'label_logo'                => 'Label Logo',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Versi Laravel',
    'ldap_enabled'              => 'Aktifkan LDAP',
    'ldap_integration'          => 'Integrasi LDAP',
    'ldap_settings'             => 'Pengaturan LDAP',
    'ldap_login_test_help'      => 'Masukkan nama pengguna dan kata sandi LDAP yang sah dari DN dasar yang anda tentukan di atas untuk menguji apakah proses masuk LDAP anda dikonfigurasi dengan benar. ANDA HARUS MENYIMPAN PENGATURAN LDAP YANG ANDA PERBARUI PERTAMA.',
    'ldap_login_sync_help'      => 'Ini hanya tes yang bisa dilacak LDAP dengan benar. Jika pengesahan LDAP anda tidak benar, pengguna mungkin masih belum dapat masuk. ANDA HARUS MENYIMPAN PENGATURAN LDAP YANG ANDA PERBARUI PERTAMA.',
    'ldap_server'               => 'Server LDAP',
    'ldap_server_help'          => 'Ini harus dimulai dengan ldap:// (for unencrypted or TLS) or ldaps:// (for SSL)',
    'ldap_server_cert'			=> 'Validasi sertifikat SSL LDAP',
    'ldap_server_cert_ignore'	=> 'Izinkan Sertifikat SSL yang tidak sah',
    'ldap_server_cert_help'		=> 'Pilih kotak centang ini jika anda menggunakan sertifikat SSL yang masuk sendiri dan ingin menerima sertifikat SSL yang tidak sah.',
    'ldap_tls'                  => 'Gunakan TLS',
    'ldap_tls_help'             => 'Ini harus diperiksa hanya jika anda menjalankan STARTTLS di server LDAP anda. ',
    'ldap_uname'                => 'LDAP Bind nama pengguna',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'LDAP Bind sandi',
    'ldap_basedn'               => 'Mengikat Dasar DN',
    'ldap_filter'               => 'Saring LDAP',
    'ldap_pw_sync'              => 'Sinkronisasi kata sandi LDAP',
    'ldap_pw_sync_help'         => 'Hapus centang pada kotak ini jika anda tidak ingin menyimpan kata sandi LDAP yang disinkronkan dengan kata sandi lokal. Menonaktifkan ini berarti pengguna anda tidak dapat masuk jika server LDAP anda tidak dapat dijangkau karena alasan tertentu.',
    'ldap_username_field'       => 'Bidang Nama Pengguna',
    'ldap_lname_field'          => 'Nama Terakhir',
    'ldap_fname_field'          => 'Nama Depan LDAP',
    'ldap_auth_filter_query'    => 'Permintaan otentikasi LDAP',
    'ldap_version'              => 'Versi LDAP',
    'ldap_active_flag'          => 'Bendera Aktif LDAP',
    'ldap_activated_flag_help'  => 'This flag is used to determine whether a user can login to Snipe-IT and does not affect the ability to check items in or out to them.',
    'ldap_emp_num'              => 'Nomor Karyawan LDAP',
    'ldap_email'                => 'Email LDAP',
    'license'                  => 'Lisensi perangkat lunak',
    'load_remote_text'          => 'Skrip Jarak Jauh',
    'load_remote_help_text'		=> 'Instalasi Snipe-IT ini bisa membuat skrip dari dunia luar.',
    'login_note'                => 'Catatan Masuk',
    'login_note_help'           => 'Opsional memasukkan beberapa kalimat di layar masuk anda, misalnya membantu orang-orang yang telah menemukan perangkat yang hilang atau dicuri. Bidang ini menerima <a href="https://help.github.com/articles/github-flavored-markdown/">Rasa penurunan Github</a>',
    'login_remote_user_text'    => 'Opsi masuk untuk Pengguna Jarak Jauh',
    'login_remote_user_enabled_text' => 'Aktifkan Login dengan Remote User Header',
    'login_remote_user_enabled_help' => 'Opsi ini memungkinkan Otentikasi melalui header REMOTE_USER sesuai dengan "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Nonaktifkan mekanisme autentikasi lainnya',
    'login_common_disabled_help' => 'Opsi ini menonaktifkan mekanisme otentikasi lainnya. Cukup aktifkan opsi ini jika Anda yakin bahwa login REMOTE_USER Anda sudah berfungsi',
    'login_remote_user_custom_logout_url_text' => 'Penyesuaian URL logout',
    'login_remote_user_custom_logout_url_help' => 'Jika diisi, pengguna akan dialihkan ke URL ini setelah keluar atau logout. Berfungsi untuk menutup sesi pengguna dengan sempurna.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Gunakan saat mencetak',
    'logo_print_assets_help'    => 'Menggunakan branding Anda pada semua hasil cetak daftar aset ',
    'full_multiple_companies_support_help_text' => 'Membatasi pengguna (termasuk admin) yang ditugaskan ke perusahaan untuk aset perusahaan mereka.',
    'full_multiple_companies_support_text' => 'Dukungan Banyak Perusahaan',
    'show_in_model_list'   => 'Tunjukkan di Model dalam urutan ke bawah',
    'optional'					=> 'pilihan',
    'per_page'                  => 'Hasil Per Halaman',
    'php'                       => 'Versi PHP',
    'php_gd_info'               => 'Anda harus menginstall php-gd untuk menampilkan kode QR, lihat petunjuk pemasangan.',
    'php_gd_warning'            => 'Pengolahan gambar PHP dan plugin GD TIDAK terpasang.',
    'pwd_secure_complexity'     => 'Kompleksitas Kata Sandi',
    'pwd_secure_complexity_help' => 'Pilih aturan kerumitan kompleksitas yang ingin anda tegakkan.',
    'pwd_secure_min'            => 'Karakter Minimal Kata Sandi',
    'pwd_secure_min_help'       => 'Minimum permitted value is 8',
    'pwd_secure_uncommon'       => 'Mencegah kata Sandi Umum',
    'pwd_secure_uncommon_help'  => 'Ini akan melarang pengguna menggunakan kata kunci umum dari 10.000 sandi teratas yang dilaporkan mengalami pelanggaran.',
    'qr_help'                   => 'Aktifkan kode QR terlebih dahulu untuk mengatur ini',
    'qr_text'                   => 'Tulis Kode QR',
    'saml_enabled'              => 'SAML enabled',
    'saml_integration'          => 'SAML Integration',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Public Certificate',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'setting'                   => 'Diatur',
    'settings'                  => 'Pengaturan',
    'show_alerts_in_menu'       => 'Tampilkan peringatan di menu atas',
    'show_archived_in_list'     => 'Aset yang di Arsipkan',
    'show_archived_in_list_text'     => 'Tampilkan aset yang di arsipkan dalam daftar "semua aset"',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Tampilkan gambar dalam email',
    'show_images_in_email_help'   => 'Hapus centang kotak ini jika instalasi Snipe-IT Anda berada di belakang VPN atau jaringan tertutup dan pengguna di luar jaringan tidak akan dapat memuat gambar yang disajikan dari instalasi ini di email mereka.',
    'site_name'                 => 'Nama Situs',
    'slack_botname'             => 'Nama Bot Slack',
    'slack_channel'             => 'Saluran Slack',
    'slack_endpoint'            => 'Titik Akhir Slack',
    'slack_integration'         => 'Pengaturan Slack',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new" rel="noopener">create an incoming webhook</a> on your Slack account. Click on the <strong>Test Slack Integration</strong> button to confirm your settings are correct before saving. ',
    'slack_integration_help_button'    => 'Setelah Anda menyimpan informasi Slack Anda, tombol tes akan muncul.',
    'slack_test_help'           => 'Uji apakah integrasi Slack Anda dikonfigurasi dengan benar. ANDA HARUS MENYIMPAN SETELAN PENGATURAN KESELAMATAN ANDA PERTAMA.',
    'snipe_version'  			=> 'Versi Snipe-IT',
    'support_footer'            => 'Link footer pendukung ',
    'support_footer_help'       => 'Tentukan siapa yang melihat tautan ke informasi pendukung dan panduan pengguna Snipe-IT',
    'version_footer'            => 'Versi pada Footer ',
    'version_footer_help'       => 'Tentukan siapa saja yang dapat melihat versi dan build number dari Snipe-IT.',
    'system'                    => 'Informasi Sistem',
    'update'                    => 'Perbarui Setelan',
    'value'                     => 'Jumlah',
    'brand'                     => 'Bermerek',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Tentang Pengaturan',
    'about_settings_text'       => 'Pengaturan ini memungkinkan anda menyesuaikan aspek-aspek tertentu dari instalasi anda.',
    'labels_per_page'           => 'Label per halaman',
    'label_dimensions'          => 'Dimensi label (inci)',
    'next_auto_tag_base'        => 'Berikut auto-kenaikan',
    'page_padding'              => 'Margin halaman (inci)',
    'privacy_policy_link'       => 'Tautan ke Kebijakan Privasi',
    'privacy_policy'            => 'Kebijakan Privasi',
    'privacy_policy_link_help'  => 'Jika url disertakan di sini, tautan ke kebijakan privasi Anda akan dimasukkan dalam footer aplikasi dan di email apa pun yang dikirimkan sistem, sesuai dengan GDPR. ',
    'purge'                     => 'Bersihkan Arsip yang Dihapus',
    'labels_display_bgutter'    => 'Beri label saluran bawah',
    'labels_display_sgutter'    => 'Beri label sisi saluran',
    'labels_fontsize'           => 'Beri label ukuran huruf',
    'labels_pagewidth'          => 'Lebar lembar label',
    'labels_pageheight'         => 'Tinggi lembar label',
    'label_gutters'        => 'Jarak label (inci)',
    'page_dimensions'        => 'Dimensi label (inci)',
    'label_fields'          => 'Bidang label yang terlihat',
    'inches'        => 'inci',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Tautan ke Snipe-IT di Email',
    'show_url_in_emails_help_text'      => 'Hapus centang pada kotak ini jika anda tidak ingin menautkan kembali ke instalasi Snipe-IT di email anda. Berguna jika sebagian besar pengguna anda tidak pernah masuk. ',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Tinggi maks gambar saluran',
    'thumbnail_max_h_help'   => 'Tinggi maksimum piksel yang dapat ditampilkan gambar saluran dalam tampilan daftar. Min 25, maks 500.',
    'two_factor'        => 'Dua Faktor Otentikasi',
    'two_factor_secret'        => 'Kode Dua Faktor',
    'two_factor_enrollment'        => 'Pendaftaran Dua Faktor',
    'two_factor_enabled_text'        => 'Aktifkan Dua Faktor',
    'two_factor_reset'        => 'Atur Ulang Dua Faktor Rahasia',
    'two_factor_reset_help'        => 'Ini akan memaksa pengguna untuk mendaftarkan perangkat mereka dengan Google Authenticator lagi. Ini bisa berguna jika perangkat mereka saat ini terdaftar hilang atau dicuri. ',
    'two_factor_reset_success'          => 'Dua perangkat faktor berhasil di-reset',
    'two_factor_reset_error'          => 'Dua faktor perangkat gagal direset',
    'two_factor_enabled_warning'        => 'Mengaktifkan dua faktor jika saat ini tidak diaktifkan dan akan segera memaksa anda untuk melakukan otentikasi dengan perangkat yang terdaftar di Google Auth. Anda juga akan memiliki kemampuan untuk mendaftarkan perangkat anda jika seseorang belum terdaftar.',
    'two_factor_enabled_help'        => 'Ini akan mengaktifkan autentikasi dua langkah menggunakan Google Authenticator.',
    'two_factor_optional'        => 'Selektif (pengguna dapat mengaktifkan atau menonaktifkan jika diizinkan)',
    'two_factor_required'        => 'Diperlukan untuk semua pengguna',
    'two_factor_disabled'        => 'Dinonaktifkan',
    'two_factor_enter_code'	=> 'Masukkan Kode Dua Faktor',
    'two_factor_config_complete'	=> 'Kirim Kode',
    'two_factor_enabled_edit_not_allowed' => 'Administrator anda tidak mengizinkan anda untuk mengedit pengaturan ini.',
    'two_factor_enrollment_text'	=> 'Diperlukan dua faktor otentikasi, namun perangkat anda belum terdaftar. Buka aplikasi Google Authenticator anda dan pindai kode QR dibawah ini untuk mendaftarkan perangkat anda. Setelah perangkat anda terdaftar, masukkan kode dibawah ini',
    'require_accept_signature'      => 'Membutuhkan Tanda Tangan',
    'require_accept_signature_help_text'      => 'Mengaktifkan fitur ini akan mengharuskan pengguna secara fisik menandatangani untuk menerima aset.',
    'left'        => 'kiri',
    'right'        => 'kanan',
    'top'        => 'atas',
    'bottom'        => 'bawah',
    'vertical'        => 'tegak lurus',
    'horizontal'        => 'mendatar',
    'unique_serial'                => 'Nomor seri unik',
    'unique_serial_help_text'                => 'Menandai boks ini akan membuat adanya batasan keunikan pada tiap nomor seri aset',
    'zerofill_count'        => 'Panjang tag aset, termasuk isian kosong',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
];
