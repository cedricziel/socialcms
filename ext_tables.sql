#
# Table structure for table 'tx_socialcms_domain_model_activitystreamsitem'
#
CREATE TABLE tx_socialcms_domain_model_activitystreamsitem (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	id varchar(255) DEFAULT '' NOT NULL,
	published int(11) DEFAULT '0' NOT NULL,
	updated int(11) DEFAULT '0' NOT NULL,
	url varchar(255) DEFAULT '' NOT NULL,
	object_type varchar(255) DEFAULT '' NOT NULL,
	open_social text NOT NULL,
	extensions text NOT NULL,

	tx_extbase_type varchar(255) DEFAULT '' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_socialcms_domain_model_activitystreamsitem'
#
CREATE TABLE tx_socialcms_domain_model_activitystreamsitem (

	activitystreamsobject int(11) unsigned DEFAULT '0' NOT NULL,

	content text NOT NULL,
	display_name varchar(255) DEFAULT '' NOT NULL,
	downstream_duplicates text NOT NULL,
	summary text NOT NULL,
	upstream_duplicates text NOT NULL,
	alias varchar(255) DEFAULT '' NOT NULL,
	attended_by varchar(255) DEFAULT '' NOT NULL,
	attending varchar(255) DEFAULT '' NOT NULL,
	dc varchar(255) DEFAULT '' NOT NULL,
	end_time int(11) DEFAULT '0' NOT NULL,
	followers text NOT NULL,
	following text NOT NULL,
	friend_requests varchar(255) DEFAULT '' NOT NULL,
	friends text NOT NULL,
	geojson text NOT NULL,
	invited text NOT NULL,
	likes text NOT NULL,
	ld text NOT NULL,
	links varchar(255) DEFAULT '' NOT NULL,
	location varchar(255) DEFAULT '' NOT NULL,
	maybe_attending varchar(255) DEFAULT '' NOT NULL,
	members varchar(255) DEFAULT '' NOT NULL,
	not_attended_by varchar(255) DEFAULT '' NOT NULL,
	mood varchar(255) DEFAULT '' NOT NULL,
	not_attending varchar(255) DEFAULT '' NOT NULL,
	odata varchar(255) DEFAULT '' NOT NULL,
	opengraph varchar(255) DEFAULT '' NOT NULL,
	rating varchar(255) DEFAULT '' NOT NULL,
	replies varchar(255) DEFAULT '' NOT NULL,
	reviews varchar(255) DEFAULT '' NOT NULL,
	saves varchar(255) DEFAULT '' NOT NULL,
	schema_org varchar(255) DEFAULT '' NOT NULL,
	shares varchar(255) DEFAULT '' NOT NULL,
	source varchar(255) DEFAULT '' NOT NULL,
	start_time int(11) DEFAULT '0' NOT NULL,
	attachments int(11) unsigned DEFAULT '0' NOT NULL,
	author int(11) unsigned DEFAULT '0',
	image int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_socialcms_domain_model_activitystreamsmedialink'
#
CREATE TABLE tx_socialcms_domain_model_activitystreamsmedialink (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	id varchar(255) DEFAULT '' NOT NULL,
	duration int(11) DEFAULT '0' NOT NULL,
	height int(11) DEFAULT '0' NOT NULL,
	url varchar(255) DEFAULT '' NOT NULL,
	width varchar(255) DEFAULT '' NOT NULL,
	open_social text NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_socialcms_domain_model_activitystreamsitem'
#
CREATE TABLE tx_socialcms_domain_model_activitystreamsitem (

	title varchar(255) DEFAULT '' NOT NULL,
	verb varchar(255) DEFAULT '' NOT NULL,
	user_id varchar(255) DEFAULT '' NOT NULL,
	group_id varchar(255) DEFAULT '' NOT NULL,
	app_id varchar(255) DEFAULT '' NOT NULL,
	bcc varchar(255) DEFAULT '' NOT NULL,
	bto varchar(255) DEFAULT '' NOT NULL,
	cc varchar(255) DEFAULT '' NOT NULL,
	context varchar(255) DEFAULT '' NOT NULL,
	dc varchar(255) DEFAULT '' NOT NULL,
	end_time int(11) DEFAULT '0' NOT NULL,
	geojson varchar(255) DEFAULT '' NOT NULL,
	in_reply_to varchar(255) DEFAULT '' NOT NULL,
	ld varchar(255) DEFAULT '' NOT NULL,
	links varchar(255) DEFAULT '' NOT NULL,
	location varchar(255) DEFAULT '' NOT NULL,
	mood varchar(255) DEFAULT '' NOT NULL,
	odata varchar(255) DEFAULT '' NOT NULL,
	opengraph varchar(255) DEFAULT '' NOT NULL,
	priority varchar(255) DEFAULT '' NOT NULL,
	rating varchar(255) DEFAULT '' NOT NULL,
	result varchar(255) DEFAULT '' NOT NULL,
	schema_org varchar(255) DEFAULT '' NOT NULL,
	source varchar(255) DEFAULT '' NOT NULL,
	start_time int(11) DEFAULT '0' NOT NULL,
	tags varchar(255) DEFAULT '' NOT NULL,
	to_object varchar(255) DEFAULT '' NOT NULL,
	actor int(11) unsigned DEFAULT '0',
	generator int(11) unsigned DEFAULT '0',
	icon int(11) unsigned DEFAULT '0',
	object int(11) unsigned DEFAULT '0',
	provider int(11) unsigned DEFAULT '0',
	target int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_socialcms_domain_model_activitystreamsitem'
#
CREATE TABLE tx_socialcms_domain_model_activitystreamsitem (

	activitystreamsobject  int(11) unsigned DEFAULT '0' NOT NULL,

);
