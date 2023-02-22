<?php

return [
    'ad'				        => 'Diretório Ativo',
    'ad_domain'				    => 'Domínio de Diretório Ativo',
    'ad_domain_help'			=> 'Geralmente isso é igual ao seu domínio de email, mas nem sempre.',
    'ad_append_domain_label'    => 'Acrescentar nome de domínio',
    'ad_append_domain'          => 'Acrescentar nome de domínio ao campo de usuário',
    'ad_append_domain_help'     => 'Usuário não é necessário para escrever "username@domain.local", ele pode apenas digitar "username".',
    'admin_cc_email'            => 'E-mail em CC',
    'admin_cc_email_help'       => 'Se você quiser enviar uma cópia dos e-mails de check-in / check-out que são enviados aos usuários para uma conta de e-mail adicional, insira-a aqui. Caso contrário, deixe este campo em branco.',
    'is_ad'				        => 'Este é um servidor de Diretório Ativo',
    'alerts'                	=> 'Alertas',
    'alert_title'               => 'Atualizar configurações de alerta',
    'alert_email'				=> 'Enviar alertas a',
    'alert_email_help'    => 'Endereços de e-mail ou listas de distribuição que você deseja que os alertas sejam enviados, separados por vírgula',
    'alerts_enabled'			=> 'Alertas ativados',
    'alert_interval'			=> 'Limite de Expiração dos Alertas (em dias)',
    'alert_inv_threshold'		=> 'Limite de Alerta de Inventário',
    'allow_user_skin'           => 'Permitir skin do usuário',
    'allow_user_skin_help_text' => 'Marcando essa caixa, permitirá que usuário substitua a interface por outra diferente.',
    'asset_ids'					=> 'ID do ativo',
    'audit_interval'            => 'Intervalo de auditoria',
    'audit_interval_help'       => 'Se você for obrigado a auditar fisicamente seus ativos, insira o intervalo em meses que você usa. Se você atualizar este valor, todas as "próximas datas de auditoria" para os ativos com uma data de auditoria futura serão atualizadas.',
    'audit_warning_days'        => 'Limiar de aviso de auditoria',
    'audit_warning_days_help'   => 'Com quantos dias de antecedência deseja ser avisado sobre a verificação de seus ativos?',
    'auto_increment_assets'		=> 'Gerar auto insercao de etiquetas de ativos',
    'auto_increment_prefix'		=> 'Prefixo (opcional)',
    'auto_incrementing_help'    => 'Permitir auto insercao dessa tag de ativo antes de configurar isto',
    'backups'					=> 'Backups',
    'backups_help'              => 'Criar, baixar e restaurar backups ',
    'backups_restoring'         => 'Restaurando do Backup',
    'backups_upload'            => 'Carregar Backup',
    'backups_path'              => 'As cópias de segurança no servidor são armazenadas em <code>:path</code>',
    'backups_restore_warning'   => 'Use o botão de restauração <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> para restaurar de um backup anterior. (Isso atualmente não funciona com o armazenamento de arquivos S3 ou o Docker.<br><br>Seu <strong>banco de dados :app_name inteiro e todos os arquivos enviados serão completamente substituídos</strong> pelo que está no arquivo de backup.  ',
    'backups_logged_out'         => 'Todos os usuários existentes, incluindo você, serão desconectados assim que sua restauração for concluída.',
    'backups_large'             => 'Backups muito grandes podem expirar na tentativa de restauração e ainda precisam ser executados via linha de comando. ',
    'barcode_settings'			=> 'Configuração do código de barras',
    'confirm_purge'			    => 'Confirmar a Exclusão em Lote',
    'confirm_purge_help'		=> 'Digite o texto "DELETE" na caixa abaixo para limpar seus registros excluídos. Essa ação não pode ser desfeita e irá excluir PERMANENTEMENTE todos os itens e usuários excluídos. (Você deve fazer um backup primeiro, apenas para estar seguro.)',
    'custom_css'				=> 'CSS personalizado',
    'custom_css_help'			=> 'Digite quaisquer CSS modificada que você gostaria de usar. Mas não inclua as tags &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'	=> 'URL de redefinição de senha personalizada',
    'custom_forgot_pass_url_help'	=> 'Isso substitui o URL de senha esquecida na tela de login, útil para direcionar pessoas para a funcionalidade de redefinição de senha LDAP interna. Eke efetivamente desativará a funcionalidade de senha esquecida do usuário local.',
    'dashboard_message'			=> 'Mensagem do Painel de Controle',
    'dashboard_message_help'	=> 'Este texto será exibido no painel de controle para qualquer pessoa com permissão para exibi-la.',
    'default_currency'  		=> 'Moeda padrão',
    'default_eula_text'			=> 'EULA Padrão',
    'default_language'			=> 'Idioma Padrão',
    'default_eula_help_text'	=> 'Você também pode associar EULAs personalizados para categorias específicas de ativos.',
    'display_asset_name'        => 'Exibir Nome do Ativo',
    'display_checkout_date'     => 'Mostrar data de check-out',
    'display_eol'               => 'Exibir EOL na visualização de tabela',
    'display_qr'                => 'Exibir Códigos QR',
    'display_alt_barcode'		=> 'Exibir códigos de barra em 1D',
    'email_logo'                => 'Logotipo do e-mail',
    'barcode_type'				=> 'Código de barras do tipo 2D',
    'alt_barcode_type'			=> 'Código de barras do tipo 1D',
    'email_logo_size'       => 'Logos quadrados no e-mail são os melhores. ',
    'enabled'                   => 'Habilitado',
    'eula_settings'				=> 'Configuração do termo de uso',
    'eula_markdown'				=> 'Este EULA permite <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Tipos de arquivos aceitos são ico, png e gif. Outros formatos de imagem podem não funcionar em todos os navegadores.',
    'favicon_size'          => 'Favicons devem ser imagens quadradas, 16x16 pixels.',
    'footer_text'               => 'Texto de rodapé adicional ',
    'footer_text_help'          => 'Este texto aparecerá no lado direito do rodapé. São permitidos o uso de hiperligações, utilizando <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. O uso de quebras de linha, cabeçalhos, imagens, etc... podem ter resultados imprevisíveis.',
    'general_settings'			=> 'Configuracoes Gerais',
    'general_settings_keywords' => 'suporte à empresa, assinatura, aceitação, formato de e-mail, formato de nome de usuário, imagens por página, miniatura, eula, painel, privacidade',
    'general_settings_help'     => 'EULA padrão e mais',
    'generate_backup'			=> 'Backup Criado',
    'header_color'              => 'Cor do Cabeçalho',
    'info'                      => 'Estas configurações deixam-lhe personalizar certos aspectos da sua instalação.',
    'label_logo'                => 'Logotipo da etiqueta',
    'label_logo_size'           => 'Logos quadrados são melhores - eles serão exibidos no topo à direita de cada etiqueta de ativo. ',
    'laravel'                   => 'Versão do Laravel',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Grupo de Permissões Padrão',
    'ldap_default_group_info'   => 'Selecione um grupo para atribuir aos usuários recém-sincronizados. Lembre-se de que um usuário tem as permissões do grupo que ele está atribuído.',
    'no_default_group'          => 'Sem Grupo Padrão',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'Chave TLS do cliente LDAP',
    'ldap_client_tls_cert'      => 'Certificado TLS do cliente LDAP',
    'ldap_enabled'              => 'LDAP ativo',
    'ldap_integration'          => 'Integração LDAP',
    'ldap_settings'             => 'Configurações LDAP',
    'ldap_client_tls_cert_help' => 'Certificado e chave TLS do Client-Side para conexões LDAP geralmente são úteis apenas em configurações do Google Workspace com "Secure LDAP". Ambas são necessárias.',
     'ldap_client_tls_key'       => 'Chave TLS do lado do cliente LDAP',
    'ldap_login_test_help'      => 'Digite um nome de usuário e senha LDAP válidos a partir do DN base que você especificou acima para testar se seu login LDAP está configurado corretamente. VOCÊ DEVE SALVAR AS CONFIGURAÇÕES LDAP ATUALIZADAS PRIMEIRAMENTE.',
    'ldap_login_sync_help'      => 'Isso apenas prova que LDAP sincroniza corretamente. Se o autenticador query LDAP não estiver correto, usuários ainda não poderão realizar o login. VOCÊ DEVE PRIMEIRO SALVAR AS NOVAS CONFIGURAÇÕES DO LDAP.',
    'ldap_manager'              => 'Gerenciador LDAP',
    'ldap_server'               => 'Servidor LDAP',
    'ldap_server_help'          => 'Deve iniciar com ldap:// (para encriptado ou TLS) ou ldaps:// (para SSL)',
    'ldap_server_cert'			=> 'Validação certificado SSL LDAP',
    'ldap_server_cert_ignore'	=> 'Permitir certificado SSL inválido',
    'ldap_server_cert_help'		=> 'Selecione esta opção se está utilizando um certificado SSL próprio e deseja aceitar um certificado SSL inválido.',
    'ldap_tls'                  => 'Use TLS',
    'ldap_tls_help'             => 'Isso deve ser verificado somente se você estiver rodando STARTTLS no seu servidor LDAP. ',
    'ldap_uname'                => 'Login do usuário LDAP',
    'ldap_dept'                 => 'Departamento LDAP',
    'ldap_phone'                => 'Número de Telefone LDAP',
    'ldap_jobtitle'             => 'Título do Trabalho LDAP',
    'ldap_country'              => 'País LDAP',
    'ldap_pword'                => 'Senha do usuário LDAP',
    'ldap_basedn'               => 'DN de Atribuição Básico',
    'ldap_filter'               => 'Filtro LDAP',
    'ldap_pw_sync'              => 'Sincronização de senha do LDAP',
    'ldap_pw_sync_help'         => 'Desmarque esta caixa se não deseja guardar as passwords LDAP com passwords locais. Ao desativar esta opção quer dizer que os utilizadores poderão não conseguir fazer login se o seu servidor LDAP não estiver disponível por alguma razão.',
    'ldap_username_field'       => 'Nome do utilizador',
    'ldap_lname_field'          => 'Último Nome',
    'ldap_fname_field'          => 'Primeiro nome',
    'ldap_auth_filter_query'    => 'Consulta de autenticação LDAP',
    'ldap_version'              => 'Versão de LDAP',
    'ldap_active_flag'          => 'Marcação ativa LDAP',
    'ldap_activated_flag_help'  => 'Este valor é usado para determinar se um usuário sincronizado pode fazer login no Snipe-IT. <strong>Isso não afeta a capacidade de verificar ou transferir itens com eles</strong>, e deve ser o <strong>nome de atributo</strong> dentro do seu AD/LDAP, <strong>não o valor</strong>. <br><br>Se este campo for definido como um nome de campo que não existe no seu AD/LDAP, ou o valor no campo AD/LDAP é definido como <code>0</code> ou <code>false</code>, <strong>O login do usuário será desativado</strong>. Se o valor no campo AD/LDAP for definido como <code>1</code> ou <code>verdadeiro</code> ou <em>qualquer outro texto</em> significa que o usuário pode acessar. Quando o campo está em branco na sua AD, respeitamos o <code>userAccountControl</code> atributo, que geralmente permite que usuários não suspensos façam login.',
    'ldap_emp_num'              => 'Número do funcionário LDAP',
    'ldap_email'                => 'Email',
    'ldap_test'                 => 'Testar LDAP',
    'ldap_test_sync'            => 'Testar Sincronização LDAP',
    'license'                   => 'Licença de software',
    'load_remote_text'          => 'Scripts Remotos',
    'load_remote_help_text'		=> 'Esta instalação do Snipe-IT pode carregar qualquer scripts do mundo.',
    'login'                     => 'Tentativas de Login',
    'login_attempt'             => 'Tentativa de login',
    'login_ip'                  => 'Endereço IP',
    'login_success'             => 'Sucesso?',
    'login_user_agent'          => 'Agente de usuário',
    'login_help'                => 'Lista de tentativas de login',
    'login_note'                => 'Login Note',
    'login_note_help'           => 'Optionally inclui algumas coisas na sua tela de login, por exemplo para ajudar pessoas que acharam um equipamento perdido ou um equipamento furtado. Este campo aceita <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>',
    'login_remote_user_text'    => 'Opções de login do usuário remoto',
    'login_remote_user_enabled_text' => 'Ativar login de usuário remoto',
    'login_remote_user_enabled_help' => 'Esta opção habilita a Autenticação via cabeçalho REMOTE_USER de acordo com a "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Desabilitar outros mecanismos de autenticação',
    'login_common_disabled_help' => 'Esta opção desativa outros mecanismos de autenticação. Basta ativar esta opção se tiver certeza de que seu login REMOTE_USER já está funcionando',
    'login_remote_user_custom_logout_url_text' => 'URL de logout personalizado',
    'login_remote_user_custom_logout_url_help' => 'Se uma URL for inserida aqui, os usuários serão redirecionados para a essa URL após desconectarem do Snipe-IT. Isso pode ser útil para encerrar sessões com o seu provedor de Autenticação corretamente.',
    'login_remote_user_header_name_text' => 'Cabeçalho personalizado do usuário',
    'login_remote_user_header_name_help' => 'Use o cabeçalho especificado em vez de REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Usar na impressão',
    'logo_print_assets_help'    => 'Usar a marca na impressão de lista de ativos ',
    'full_multiple_companies_support_help_text' => 'Restringir utilizadores (incluindo admins) associados a empresas ao ativos da empresa.',
    'full_multiple_companies_support_text' => 'Suporte multi-empresa completo',
    'show_in_model_list'   => 'Mostrar modelos em menu de cascata',
    'optional'					=> 'Opcional',
    'per_page'                  => 'Resultados Por Página',
    'php'                       => 'Versão do PHP',
    'php_info'                  => 'PHP Info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, sistema, informações',
    'php_overview_help'         => 'Informação do sistema PHP',
    'php_gd_info'               => 'Você deve instalar o php-gd para exibir códigos QR, veja as <a href="http://www.php.net/manual/en/image.installation.php">instruções de instalação</a>.',
    'php_gd_warning'            => 'O plugin PHP Image Processing and GD NÃO está instalado.',
    'pwd_secure_complexity'     => 'Complexidade de senha',
    'pwd_secure_complexity_help' => 'Selecione as regras de complexidade de senha que você deseja aplicar.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'A senha não pode ser igual ao nome, sobrenome, email ou nome de usuário',
    'pwd_secure_complexity_letters' => 'Requer pelo menos uma letra',
    'pwd_secure_complexity_numbers' => 'Requer pelo menos um número',
    'pwd_secure_complexity_symbols' => 'Requer pelo menos um símbolo',
    'pwd_secure_complexity_case_diff' => 'Requer pelo menos um caractere maiúsculo e um minúsculo',
    'pwd_secure_min'            => 'Senha (mín. caracteres)',
    'pwd_secure_min_help'       => 'Valor mínimo permitido é 8',
    'pwd_secure_uncommon'       => 'Prevenir senhas comuns',
    'pwd_secure_uncommon_help'  => 'Isso impedirá os usuários de usar senhas comuns das 10 senhas superiores registradas em brechas.',
    'qr_help'                   => 'Habilite os Códigos QR primeiro para definir isto',
    'qr_text'                   => 'Texto do Código QR',
    'saml'                      => 'SAML',
    'saml_title'                => 'Atualizar configurações de SAML',
    'saml_help'                 => 'Configurações de SAML',
    'saml_enabled'              => 'SAML habilitado',
    'saml_integration'          => 'Integração SAML',
    'saml_sp_entityid'          => 'ID da entidade',
    'saml_sp_acs_url'           => 'URL da declaração do cliente (ACS)',
    'saml_sp_sls_url'           => 'URL do Serviço de Logout Único (SLS)',
    'saml_sp_x509cert'          => 'Certificado Público',
    'saml_sp_metadata_url'      => 'URL dos Metadados',
    'saml_idp_metadata'         => 'Metadados SAML IdP',
    'saml_idp_metadata_help'    => 'Você pode especificar os metadados do IdP usando uma URL ou arquivo XML.',
    'saml_attr_mapping_username' => 'Mapeamento de Atributo - Nome de Usuário',
    'saml_attr_mapping_username_help' => 'NameID será usado se mapeamento do atributo não for especificado ou inválido.',
    'saml_forcelogin_label'     => 'Forçar login SAML',
    'saml_forcelogin'           => 'Fazer o SAML o login primário',
    'saml_forcelogin_help'      => 'Você pode usar \'/login?nosaml\' para chegar à página de login normal.',
    'saml_slo_label'            => 'Logout Único do SAML',
    'saml_slo'                  => 'Enviar LogoutRequest para IdP no Logout',
    'saml_slo_help'             => 'Isto fará com que o usuário seja redirecionado primeiro para o IdP no logout. Deixe desmarcado se o IdP não suporta corretamente SLO, iniciado pelo SP.',
    'saml_custom_settings'      => 'Configurações personalizadas do SAML',
    'saml_custom_settings_help' => 'Você pode especificar configurações adicionais para a biblioteca one/php-saml. Use por sua conta e risco.',
    'saml_download'             => 'Baixar Metadados',
    'setting'                   => 'Configuração',
    'settings'                  => 'Configurações',
    'show_alerts_in_menu'       => 'Mostrar alertas no menu superior',
    'show_archived_in_list'     => 'Ativos arquivados',
    'show_archived_in_list_text'     => 'Mostrar ativos arquivados na listagem "todos os ativos"',
    'show_assigned_assets'      => 'Mostrar ativos atribuídos aos ativos',
    'show_assigned_assets_help' => 'Exibir ativos que foram atribuídos aos outros ativos em Exibir Usuário -> Ativos, Visualizar Usuário -> Informações -> Imprimir Todas as atribuídos e na Conta -> Visualizar Ativos Atribuídos.',
    'show_images_in_email'     => 'Mostrar imagens em e-mails',
    'show_images_in_email_help'   => 'Desmarque esta caixa se sua instalação de Snipe-IT está por trás de uma VPN ou rede fechada e usuários fora da rede não será capazes de carregar imagens, servidas a partir desta instalação em seus e-mails.',
    'site_name'                 => 'Nome do Site',
    'slack'                     => 'Slack',
    'slack_title'               => 'Atualizar configurações do Slack',
    'slack_help'                => 'Slack settings',
    'slack_botname'             => 'Botname do Stack',
    'slack_channel'             => 'Canal do Stack',
    'slack_endpoint'            => 'Endpoint do Slack',
    'slack_integration'         => 'Configurações do Stack',
    'slack_integration_help'    => 'A integração do Slack é opcional, mas o endpoint e o canal são necessários se você quiser usá-lo. Para configurar a integração do Slack, primeiro você deve <a href=":slack_link" target="_new" rel="noopener">criar um webhook de entrada</a> em sua conta do Slack. Clique no botão <strong>de integração do Slack de teste</strong> para confirmar se suas configurações estão corretas antes de salvar. ',
    'slack_integration_help_button'    => 'Depois de salvar suas informações do Slack, um botão de teste será exibido.',
    'slack_test_help'           => 'Teste se sua integração do Slack está configurada corretamente. VOCÊ DEVE SALVAR SUAS CONFIGURAÇÕES NO SLACK PRIMEIRO.',
    'snipe_version'  			=> 'Versão do Snipe-IT',
    'support_footer'            => 'Links de rodapé de suporte ',
    'support_footer_help'       => 'Especifique quem vê os links para as informações de Suporte Snipe-IT e o Manual do Usuário',
    'version_footer'            => 'Versão no Rodapé ',
    'version_footer_help'       => 'Especifica quem vê o número de versão e compilação do Snipe-lT.',
    'system'                    => 'Informação do sistema',
    'update'                    => 'Atualizar Configurações',
    'value'                     => 'Valor',
    'brand'                     => 'Marca',
    'brand_keywords'            => 'rodapé, logo, imprimir, tema, tema, skin, cabeçalho, cores, cor, css',
    'brand_help'                => 'Logotipo, Nome do Site',
    'web_brand'                 => 'Tipo de marca da web',
    'about_settings_title'      => 'Sobre as Configurações',
    'about_settings_text'       => 'Estas configurações permitem personalizar alguns aspectos da instalação.',
    'labels_per_page'           => 'Etiquetas por página',
    'label_dimensions'          => 'Dimensões das etiquetas (polegadas)',
    'next_auto_tag_base'        => 'Próximo auto incremento',
    'page_padding'              => 'Margens da página (polegadas)',
    'privacy_policy_link'       => 'Link para a Política de Privacidade',
    'privacy_policy'            => 'Política de Privacidade',
    'privacy_policy_link_help'  => 'Se uma URL for inserida aqui, um link para a política de privacidade será incluída no rodapé da página e em qualquer email enviado pelo sistema, em conformidade com o GDPR. ',
    'purge'                     => 'Limpar Registros Excluídos',
    'purge_deleted'             => 'Limpar Excluídos ',
    'labels_display_bgutter'    => 'Margem inferior da etiqueta',
    'labels_display_sgutter'    => 'Margem lateral da etiqueta',
    'labels_fontsize'           => 'Tamanho do texto da etiqueta',
    'labels_pagewidth'          => 'Largura da folha de etiquetas',
    'labels_pageheight'         => 'Altura da folha de etiquetas',
    'label_gutters'        => 'Espaçamento entre etiquetas (polegadas)',
    'page_dimensions'        => 'Dimensões da pagina (polegadas)',
    'label_fields'          => 'Campos visiveis nas etiquetas',
    'inches'        => 'polegadas',
    'width_w'        => 'largura',
    'height_h'        => 'altura',
    'show_url_in_emails'                => 'Link para Snipe-IT em E-mails',
    'show_url_in_emails_help_text'      => 'Desmarque esta caixa se não deseja vincular novamente a sua instalação Snipe-IT em seus rodapés de e-mail. Útil se a maioria de seus usuários nunca logar. ',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Altura máxima da miniatura',
    'thumbnail_max_h_help'   => 'Altura máxima em pixels que as miniaturas podem exibir na visualização de listagem. Min 25, max 500.',
    'two_factor'        => 'Autenticação em dois passos',
    'two_factor_secret'        => 'Código de autenticação em dois passos',
    'two_factor_enrollment'        => 'Ativação de autenticação em dois passos',
    'two_factor_enabled_text'        => 'Ativar autenticação em dois passos',
    'two_factor_reset'        => 'Redefinir senha autenticação de pois passos',
    'two_factor_reset_help'        => 'Isto irá forçar o usuário a registar o seu dispositivo com Google Authenticator novamente. Isso pode ser útil se seu dispositivo registrado for perdido ou roubado. ',
    'two_factor_reset_success'          => 'Dispositivo de autenticação de dois passos foi redefinido com sucesso',
    'two_factor_reset_error'          => 'Reset do dispositivo de autenticação de dois passos falhou',
    'two_factor_enabled_warning'        => 'Ao ativar a autenticação de dois passos se não estiver já ativado, você será forçado a autenticar com o Google Auth com um dispositivo registrado.',
    'two_factor_enabled_help'        => 'Isso irá ativar a autenticação de dois passos usando Google Authenticator.',
    'two_factor_optional'        => 'Seletivo (os usuários podem ativar ou desativar se permitido)',
    'two_factor_required'        => 'Obrigatório para todos os usuários',
    'two_factor_disabled'        => 'Desativado',
    'two_factor_enter_code'	=> 'Digite o código de autenticação de pois passos',
    'two_factor_config_complete'	=> 'Enviar código',
    'two_factor_enabled_edit_not_allowed' => 'O Administrador não permite editar esta opção.',
    'two_factor_enrollment_text'	=> "A autenticação de dois passos é obrigatória, mas se o teu dispositivo ainda não foi registrado, abra o Google Authenticator e escaneie o QR Code para registrar o teu dispositivo. Uma vez registrado, digite o código abaixo",
    'require_accept_signature'      => 'Requer assinatura',
    'require_accept_signature_help_text'      => 'Habilitar este recurso vai exigir que os usuários assinem pessoalmente o aceite do ativo.',
    'left'        => 'esquerda',
    'right'        => 'direita',
    'top'        => 'topo',
    'bottom'        => 'rodapé',
    'vertical'        => 'vertical',
    'horizontal'        => 'horizontal',
    'unique_serial'                => 'Números de série únicos',
    'unique_serial_help_text'                => 'Marcar esta opção impõe identificadores únicos nos números de séries dos ativos',
    'zerofill_count'        => 'Comprimento de etiquetas de ativos, incluindo zerofill',
    'username_format_help'   => 'Esta configuração será usada somente pelo processo de importação, se um nome de usuário não for fornecido nós iremos gerar um nome de usuário para você.',
    'oauth_title' => 'Configurações da API OAuth',
    'oauth' => 'OAuth',
    'oauth_help' => 'Configurações de Endpoint Oauth',
    'asset_tag_title' => 'Atualizar configurações de Tag do Ativo',
    'barcode_title' => 'Atualizar Configurações de Código de Barras',
    'barcodes' => 'Códigos de barras',
    'barcodes_help_overview' => 'Código de barras &amp; configurações QR',
    'barcodes_help' => 'Isto tentará apagar códigos de barras em cache. Isso normalmente só seria usado se as configurações do código de barras tivessem sido alteradas, ou se a URL do Snipe-IT tivesse sido alterada. Códigos de barras serão re-gerados quando acessados em seguida.',
    'barcodes_spinner' => 'Tentando excluir arquivos...',
    'barcode_delete_cache' => 'Apagar Cache de Código de Barras',
    'branding_title' => 'Atualizar configurações de marca',
    'general_title' => 'Atualizar configurações gerais',
    'mail_test' => 'Teste de Envio',
    'mail_test_help' => 'Isto tentará enviar um e-mail de teste para :replyto.',
    'filter_by_keyword' => 'Filtrar definindo a palavra-chave',
    'security' => 'Segurança',
    'security_title' => 'Atualizar Configurações de Segurança',
    'security_keywords' => 'senha, senhas, requisitos, dois fatores, duas senhas, senha comum, logon remoto, logar, autenticação',
    'security_help' => 'Duas Factores, Restrições de Senha',
    'groups_keywords' => 'permissões, grupos de permissão, autorização',
    'groups_help' => 'Grupos de permissão',
    'localization' => 'Localização',
    'localization_title' => 'Atualizar configurações de localização',
    'localization_keywords' => 'localização, moeda, local, localidade, fuso horário, fuso horário, internacional, internatalização, idioma, tradução',
    'localization_help' => 'Idioma, exibição de data',
    'notifications' => 'Notificações',
    'notifications_help' => 'Alertas de e-mail, configurações de auditoria',
    'asset_tags_help' => 'Incrementando e prefixos',
    'labels' => 'Etiquetas',
    'labels_title' => 'Atualizar configurações de etiqueta',
    'labels_help' => 'Tamanho da etiqueta &amp; configurações',
    'purge' => 'Eliminar',
    'purge_keywords' => 'excluir permanentemente',
    'purge_help' => 'Limpar Registros Excluídos',
    'ldap_extension_warning' => 'Não parece que a extensão LDAP esteja instalada ou ativada neste servidor. Você ainda pode salvar suas configurações, mas precisará ativar a extensão LDAP para PHP antes de a sincronização LDAP ou login funcionar.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Número de funcionário',
    'create_admin_user' => 'Criar Usuário ::',
    'create_admin_success' => 'Sucesso! Seu administrador foi adicionado!',
    'create_admin_redirect' => 'Clique aqui para acessar o seu aplicativo!',
    'setup_migrations' => 'Migrações de banco de dados ::',
    'setup_no_migrations' => 'Não havia nada para migrar. As tabelas do banco de dados já foram configuradas!',
    'setup_successful_migrations' => 'Suas tabelas de banco de dados foram criadas',
    'setup_migration_output' => 'Saída de migração:',
    'setup_migration_create_user' => 'Próximo: Criar Usuário',
    'ldap_settings_link' => 'Página de configurações LDAP',
    'slack_test' => 'Testar <i class="fab fa-slack"></i> Integração',
];
