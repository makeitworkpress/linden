<?php
/**
 * Retrieve our icons
 */

// Bail if accessed directly
if ( ! defined( 'ABSPATH' ) )
    die;

if( is_admin() || is_customize_preview() ) {
    $icons['material'] = array(
        "&#xE84D;" => "3d_rotation",
        "&#xE190;" => "access_alarm",
        "&#xE191;" => "access_alarms",
        "&#xE192;" => "access_time",
        "&#xE84E;" => "accessibility",
        "&#xE84F;" => "account_balance",
        "&#xE850;" => "account_balance_wallet",
        "&#xE851;" => "account_box",
        "&#xE853;" => "account_circle",
        "&#xE60E;" => "adb",
        "&#xE145;" => "add",
        "&#xE193;" => "add_alarm",
        "&#xE003;" => "add_alert",
        "&#xE146;" => "add_box",
        "&#xE147;" => "add_circle",
        "&#xE148;" => "add_circle_outline",
        "&#xE854;" => "add_shopping_cart",
        "&#xE39D;" => "add_to_photos",
        "&#xE39E;" => "adjust",
        "&#xE630;" => "airline_seat_flat",
        "&#xE631;" => "airline_seat_flat_angled",
        "&#xE632;" => "airline_seat_individual_suite",
        "&#xE633;" => "airline_seat_legroom_extra",
        "&#xE634;" => "airline_seat_legroom_normal",
        "&#xE635;" => "airline_seat_legroom_reduced",
        "&#xE636;" => "airline_seat_recline_extra",
        "&#xE637;" => "airline_seat_recline_normal",
        "&#xE195;" => "airplanemode_active",
        "&#xE194;" => "airplanemode_inactive",
        "&#xE055;" => "airplay",
        "&#xE855;" => "alarm",
        "&#xE856;" => "alarm_add",
        "&#xE857;" => "alarm_off",
        "&#xE858;" => "alarm_on",
        "&#xE019;" => "album",
        "&#xE859;" => "android",
        "&#xE85A;" => "announcement",
        "&#xE5C3;" => "apps",
        "&#xE149;" => "archive",
        "&#xE5C4;" => "arrow_back",
        "&#xE5C5;" => "arrow_drop_down",
        "&#xE5C6;" => "arrow_drop_down_circle",
        "&#xE5C7;" => "arrow_drop_up",
        "&#xE5C8;" => "arrow_forward",
        "&#xE85B;" => "aspect_ratio",
        "&#xE85C;" => "assessment",
        "&#xE85D;" => "assignment",
        "&#xE85E;" => "assignment_ind",
        "&#xE85F;" => "assignment_late",
        "&#xE860;" => "assignment_return",
        "&#xE861;" => "assignment_returned",
        "&#xE862;" => "assignment_turned_in",
        "&#xE39F;" => "assistant",
        "&#xE3A0;" => "assistant_photo",
        "&#xE226;" => "attach_file",
        "&#xE227;" => "attach_money",
        "&#xE2BC;" => "attachment",
        "&#xE3A1;" => "audiotrack",
        "&#xE863;" => "autorenew",
        "&#xE01B;" => "av_timer",
        "&#xE14A;" => "backspace",
        "&#xE864;" => "backup",
        "&#xE19C;" => "battery_alert",
        "&#xE1A3;" => "battery_charging_full",
        "&#xE1A4;" => "battery_full",
        "&#xE1A5;" => "battery_std",
        "&#xE1A6;" => "battery_unknown",
        "&#xE52D;" => "beenhere",
        "&#xE14B;" => "block",
        "&#xE1A7;" => "bluetooth",
        "&#xE60F;" => "bluetooth_audio",
        "&#xE1A8;" => "bluetooth_connected",
        "&#xE1A9;" => "bluetooth_disabled",
        "&#xE1AA;" => "bluetooth_searching",
        "&#xE3A2;" => "blur_circular",
        "&#xE3A3;" => "blur_linear",
        "&#xE3A4;" => "blur_off",
        "&#xE3A5;" => "blur_on",
        "&#xE865;" => "book",
        "&#xE866;" => "bookmark",
        "&#xE867;" => "bookmark_border",
        "&#xE228;" => "border_all",
        "&#xE229;" => "border_bottom",
        "&#xE22A;" => "border_clear",
        "&#xE22B;" => "border_color",
        "&#xE22C;" => "border_horizontal",
        "&#xE22D;" => "border_inner",
        "&#xE22E;" => "border_left",
        "&#xE22F;" => "border_outer",
        "&#xE230;" => "border_right",
        "&#xE231;" => "border_style",
        "&#xE232;" => "border_top",
        "&#xE233;" => "border_vertical",
        "&#xE3A6;" => "brightness_1",
        "&#xE3A7;" => "brightness_2",
        "&#xE3A8;" => "brightness_3",
        "&#xE3A9;" => "brightness_4",
        "&#xE3AA;" => "brightness_5",
        "&#xE3AB;" => "brightness_6",
        "&#xE3AC;" => "brightness_7",
        "&#xE1AB;" => "brightness_auto",
        "&#xE1AC;" => "brightness_high",
        "&#xE1AD;" => "brightness_low",
        "&#xE1AE;" => "brightness_medium",
        "&#xE3AD;" => "broken_image",
        "&#xE3AE;" => "brush",
        "&#xE868;" => "bug_report",
        "&#xE869;" => "build",
        "&#xE0AF;" => "business",
        "&#xE86A;" => "cached",
        "&#xE7E9;" => "cake",
        "&#xE0B0;" => "call",
        "&#xE0B1;" => "call_end",
        "&#xE0B2;" => "call_made",
        "&#xE0B3;" => "call_merge",
        "&#xE0B4;" => "call_missed",
        "&#xE0B5;" => "call_received",
        "&#xE0B6;" => "call_split",
        "&#xE3AF;" => "camera",
        "&#xE3B0;" => "camera_alt",
        "&#xE8FC;" => "camera_enhance",
        "&#xE3B1;" => "camera_front",
        "&#xE3B2;" => "camera_rear",
        "&#xE3B3;" => "camera_roll",
        "&#xE5C9;" => "cancel",
        "&#xE8F6;" => "card_giftcard",
        "&#xE8F7;" => "card_membership",
        "&#xE8F8;" => "card_travel",
        "&#xE307;" => "cast",
        "&#xE308;" => "cast_connected",
        "&#xE3B4;" => "center_focus_strong",
        "&#xE3B5;" => "center_focus_weak",
        "&#xE86B;" => "change_history",
        "&#xE0B7;" => "chat",
        "&#xE0CA;" => "chat_bubble",
        "&#xE0CB;" => "chat_bubble_outline",
        "&#xE5CA;" => "check",
        "&#xE834;" => "check_box",
        "&#xE835;" => "check_box_outline_blank",
        "&#xE86C;" => "check_circle",
        "&#xE5CB;" => "chevron_left",
        "&#xE5CC;" => "chevron_right",
        "&#xE86D;" => "chrome_reader_mode",
        "&#xE86E;" => "class",
        "&#xE14C;" => "clear",
        "&#xE0B8;" => "clear_all",
        "&#xE5CD;" => "close",
        "&#xE01C;" => "closed_caption",
        "&#xE2BD;" => "cloud",
        "&#xE2BE;" => "cloud_circle",
        "&#xE2BF;" => "cloud_done",
        "&#xE2C0;" => "cloud_download",
        "&#xE2C1;" => "cloud_off",
        "&#xE2C2;" => "cloud_queue",
        "&#xE2C3;" => "cloud_upload",
        "&#xE86F;" => "code",
        "&#xE3B6;" => "collections",
        "&#xE431;" => "collections_bookmark",
        "&#xE3B7;" => "color_lens",
        "&#xE3B8;" => "colorize",
        "&#xE0B9;" => "comment",
        "&#xE3B9;" => "compare",
        "&#xE30A;" => "computer",
        "&#xE638;" => "confirmation_number",
        "&#xE0CF;" => "contact_phone",
        "&#xE0BA;" => "contacts",
        "&#xE14D;" => "content_copy",
        "&#xE14E;" => "content_cut",
        "&#xE14F;" => "content_paste",
        "&#xE3BA;" => "control_point",
        "&#xE3BB;" => "control_point_duplicate",
        "&#xE150;" => "create",
        "&#xE870;" => "credit_card",
        "&#xE3BE;" => "crop",
        "&#xE3BC;" => "crop_16_9",
        "&#xE3BD;" => "crop_3_2",
        "&#xE3BF;" => "crop_5_4",
        "&#xE3C0;" => "crop_7_5",
        "&#xE3C1;" => "crop_din",
        "&#xE3C2;" => "crop_free",
        "&#xE3C3;" => "crop_landscape",
        "&#xE3C4;" => "crop_original",
        "&#xE3C5;" => "crop_portrait",
        "&#xE3C6;" => "crop_square",
        "&#xE871;" => "dashboard",
        "&#xE1AF;" => "data_usage",
        "&#xE3C7;" => "dehaze",
        "&#xE872;" => "delete",
        "&#xE873;" => "description",
        "&#xE30B;" => "desktop_mac",
        "&#xE30C;" => "desktop_windows",
        "&#xE3C8;" => "details",
        "&#xE30D;" => "developer_board",
        "&#xE1B0;" => "developer_mode",
        "&#xE335;" => "device_hub",
        "&#xE1B1;" => "devices",
        "&#xE0BB;" => "dialer_sip",
        "&#xE0BC;" => "dialpad",
        "&#xE52E;" => "directions",
        "&#xE52F;" => "directions_bike",
        "&#xE532;" => "directions_boat",
        "&#xE530;" => "directions_bus",
        "&#xE531;" => "directions_car",
        "&#xE534;" => "directions_railway",
        "&#xE566;" => "directions_run",
        "&#xE533;" => "directions_subway",
        "&#xE535;" => "directions_transit",
        "&#xE536;" => "directions_walk",
        "&#xE610;" => "disc_full",
        "&#xE875;" => "dns",
        "&#xE612;" => "do_not_disturb",
        "&#xE611;" => "do_not_disturb_alt",
        "&#xE30E;" => "dock",
        "&#xE7EE;" => "domain",
        "&#xE876;" => "done",
        "&#xE877;" => "done_all",
        "&#xE151;" => "drafts",
        "&#xE613;" => "drive_eta",
        "&#xE1B2;" => "dvr",
        "&#xE3C9;" => "edit",
        "&#xE8FB;" => "eject",
        "&#xE0BE;" => "email",
        "&#xE01D;" => "equalizer",
        "&#xE000;" => "error",
        "&#xE001;" => "error_outline",
        "&#xE878;" => "event",
        "&#xE614;" => "event_available",
        "&#xE615;" => "event_busy",
        "&#xE616;" => "event_note",
        "&#xE903;" => "event_seat",
        "&#xE879;" => "exit_to_app",
        "&#xE5CE;" => "expand_less",
        "&#xE5CF;" => "expand_more",
        "&#xE01E;" => "explicit",
        "&#xE87A;" => "explore",
        "&#xE3CA;" => "exposure",
        "&#xE3CB;" => "exposure_neg_1",
        "&#xE3CC;" => "exposure_neg_2",
        "&#xE3CD;" => "exposure_plus_1",
        "&#xE3CE;" => "exposure_plus_2",
        "&#xE3CF;" => "exposure_zero",
        "&#xE87B;" => "extension",
        "&#xE87C;" => "face",
        "&#xE01F;" => "fast_forward",
        "&#xE020;" => "fast_rewind",
        "&#xE87D;" => "favorite",
        "&#xE87E;" => "favorite_border",
        "&#xE87F;" => "feedback",
        "&#xE2C4;" => "file_download",
        "&#xE2C6;" => "file_upload",
        "&#xE3D3;" => "filter",
        "&#xE3D0;" => "filter_1",
        "&#xE3D1;" => "filter_2",
        "&#xE3D2;" => "filter_3",
        "&#xE3D4;" => "filter_4",
        "&#xE3D5;" => "filter_5",
        "&#xE3D6;" => "filter_6",
        "&#xE3D7;" => "filter_7",
        "&#xE3D8;" => "filter_8",
        "&#xE3D9;" => "filter_9",
        "&#xE3DA;" => "filter_9_plus",
        "&#xE3DB;" => "filter_b_and_w",
        "&#xE3DC;" => "filter_center_focus",
        "&#xE3DD;" => "filter_drama",
        "&#xE3DE;" => "filter_frames",
        "&#xE3DF;" => "filter_hdr",
        "&#xE152;" => "filter_list",
        "&#xE3E0;" => "filter_none",
        "&#xE3E2;" => "filter_tilt_shift",
        "&#xE3E3;" => "filter_vintage",
        "&#xE880;" => "find_in_page",
        "&#xE881;" => "find_replace",
        "&#xE153;" => "flag",
        "&#xE3E4;" => "flare",
        "&#xE3E5;" => "flash_auto",
        "&#xE3E6;" => "flash_off",
        "&#xE3E7;" => "flash_on",
        "&#xE539;" => "flight",
        "&#xE904;" => "flight_land",
        "&#xE905;" => "flight_takeoff",
        "&#xE3E8;" => "flip",
        "&#xE882;" => "flip_to_back",
        "&#xE883;" => "flip_to_front",
        "&#xE2C7;" => "folder",
        "&#xE2C8;" => "folder_open",
        "&#xE2C9;" => "folder_shared",
        "&#xE617;" => "folder_special",
        "&#xE167;" => "font_download",
        "&#xE234;" => "format_align_center",
        "&#xE235;" => "format_align_justify",
        "&#xE236;" => "format_align_left",
        "&#xE237;" => "format_align_right",
        "&#xE238;" => "format_bold",
        "&#xE239;" => "format_clear",
        "&#xE23A;" => "format_color_fill",
        "&#xE23B;" => "format_color_reset",
        "&#xE23C;" => "format_color_text",
        "&#xE23D;" => "format_indent_decrease",
        "&#xE23E;" => "format_indent_increase",
        "&#xE23F;" => "format_italic",
        "&#xE240;" => "format_line_spacing",
        "&#xE241;" => "format_list_bulleted",
        "&#xE242;" => "format_list_numbered",
        "&#xE243;" => "format_paint",
        "&#xE244;" => "format_quote",
        "&#xE245;" => "format_size",
        "&#xE246;" => "format_strikethrough",
        "&#xE247;" => "format_textdirection_l_to_r",
        "&#xE248;" => "format_textdirection_r_to_l",
        "&#xE249;" => "format_underlined",
        "&#xE0BF;" => "forum",
        "&#xE154;" => "forward",
        "&#xE056;" => "forward_10",
        "&#xE057;" => "forward_30",
        "&#xE058;" => "forward_5",
        "&#xE5D0;" => "fullscreen",
        "&#xE5D1;" => "fullscreen_exit",
        "&#xE24A;" => "functions",
        "&#xE30F;" => "gamepad",
        "&#xE021;" => "games",
        "&#xE155;" => "gesture",
        "&#xE884;" => "get_app",
        "&#xE908;" => "gif",
        "&#xE1B3;" => "gps_fixed",
        "&#xE1B4;" => "gps_not_fixed",
        "&#xE1B5;" => "gps_off",
        "&#xE885;" => "grade",
        "&#xE3E9;" => "gradient",
        "&#xE3EA;" => "grain",
        "&#xE1B8;" => "graphic_eq",
        "&#xE3EB;" => "grid_off",
        "&#xE3EC;" => "grid_on",
        "&#xE7EF;" => "group",
        "&#xE7F0;" => "group_add",
        "&#xE886;" => "group_work",
        "&#xE052;" => "hd",
        "&#xE3ED;" => "hdr_off",
        "&#xE3EE;" => "hdr_on",
        "&#xE3F1;" => "hdr_strong",
        "&#xE3F2;" => "hdr_weak",
        "&#xE310;" => "headset",
        "&#xE311;" => "headset_mic",
        "&#xE3F3;" => "healing",
        "&#xE023;" => "hearing",
        "&#xE887;" => "help",
        "&#xE8FD;" => "help_outline",
        "&#xE024;" => "high_quality",
        "&#xE888;" => "highlight_off",
        "&#xE889;" => "history",
        "&#xE88A;" => "home",
        "&#xE53A;" => "hotel",
        "&#xE88B;" => "hourglass_empty",
        "&#xE88C;" => "hourglass_full",
        "&#xE902;" => "http",
        "&#xE88D;" => "https",
        "&#xE3F4;" => "image",
        "&#xE3F5;" => "image_aspect_ratio",
        "&#xE0C3;" => "import_export",
        "&#xE156;" => "inbox",
        "&#xE909;" => "indeterminate_check_box",
        "&#xE88E;" => "info",
        "&#xE88F;" => "info_outline",
        "&#xE890;" => "input",
        "&#xE24B;" => "insert_chart",
        "&#xE24C;" => "insert_comment",
        "&#xE24D;" => "insert_drive_file",
        "&#xE24E;" => "insert_emoticon",
        "&#xE24F;" => "insert_invitation",
        "&#xE250;" => "insert_link",
        "&#xE251;" => "insert_photo",
        "&#xE891;" => "invert_colors",
        "&#xE0C4;" => "invert_colors_off",
        "&#xE3F6;" => "iso",
        "&#xE312;" => "keyboard",
        "&#xE313;" => "keyboard_arrow_down",
        "&#xE314;" => "keyboard_arrow_left",
        "&#xE315;" => "keyboard_arrow_right",
        "&#xE316;" => "keyboard_arrow_up",
        "&#xE317;" => "keyboard_backspace",
        "&#xE318;" => "keyboard_capslock",
        "&#xE31A;" => "keyboard_hide",
        "&#xE31B;" => "keyboard_return",
        "&#xE31C;" => "keyboard_tab",
        "&#xE31D;" => "keyboard_voice",
        "&#xE892;" => "label",
        "&#xE893;" => "label_outline",
        "&#xE3F7;" => "landscape",
        "&#xE894;" => "language",
        "&#xE31E;" => "laptop",
        "&#xE31F;" => "laptop_chromebook",
        "&#xE320;" => "laptop_mac",
        "&#xE321;" => "laptop_windows",
        "&#xE895;" => "launch",
        "&#xE53B;" => "layers",
        "&#xE53C;" => "layers_clear",
        "&#xE3F8;" => "leak_add",
        "&#xE3F9;" => "leak_remove",
        "&#xE3FA;" => "lens",
        "&#xE02E;" => "library_add",
        "&#xE02F;" => "library_books",
        "&#xE030;" => "library_music",
        "&#xE157;" => "link",
        "&#xE896;" => "list",
        "&#xE0C6;" => "live_help",
        "&#xE639;" => "live_tv",
        "&#xE53F;" => "local_activity",
        "&#xE53D;" => "local_airport",
        "&#xE53E;" => "local_atm",
        "&#xE540;" => "local_bar",
        "&#xE541;" => "local_cafe",
        "&#xE542;" => "local_car_wash",
        "&#xE543;" => "local_convenience_store",
        "&#xE556;" => "local_dining",
        "&#xE544;" => "local_drink",
        "&#xE545;" => "local_florist",
        "&#xE546;" => "local_gas_station",
        "&#xE547;" => "local_grocery_store",
        "&#xE548;" => "local_hospital",
        "&#xE549;" => "local_hotel",
        "&#xE54A;" => "local_laundry_service",
        "&#xE54B;" => "local_library",
        "&#xE54C;" => "local_mall",
        "&#xE54D;" => "local_movies",
        "&#xE54E;" => "local_offer",
        "&#xE54F;" => "local_parking",
        "&#xE550;" => "local_pharmacy",
        "&#xE551;" => "local_phone",
        "&#xE552;" => "local_pizza",
        "&#xE553;" => "local_play",
        "&#xE554;" => "local_post_office",
        "&#xE555;" => "local_printshop",
        "&#xE557;" => "local_see",
        "&#xE558;" => "local_shipping",
        "&#xE559;" => "local_taxi",
        "&#xE7F1;" => "location_city",
        "&#xE1B6;" => "location_disabled",
        "&#xE0C7;" => "location_off",
        "&#xE0C8;" => "location_on",
        "&#xE1B7;" => "location_searching",
        "&#xE897;" => "lock",
        "&#xE898;" => "lock_open",
        "&#xE899;" => "lock_outline",
        "&#xE3FC;" => "looks",
        "&#xE3FB;" => "looks_3",
        "&#xE3FD;" => "looks_4",
        "&#xE3FE;" => "looks_5",
        "&#xE3FF;" => "looks_6",
        "&#xE400;" => "looks_one",
        "&#xE401;" => "looks_two",
        "&#xE028;" => "loop",
        "&#xE402;" => "loupe",
        "&#xE89A;" => "loyalty",
        "&#xE158;" => "mail",
        "&#xE55B;" => "map",
        "&#xE159;" => "markunread",
        "&#xE89B;" => "markunread_mailbox",
        "&#xE322;" => "memory",
        "&#xE5D2;" => "menu",
        "&#xE252;" => "merge_type",
        "&#xE0C9;" => "message",
        "&#xE029;" => "mic",
        "&#xE02A;" => "mic_none",
        "&#xE02B;" => "mic_off",
        "&#xE618;" => "mms",
        "&#xE253;" => "mode_comment",
        "&#xE254;" => "mode_edit",
        "&#xE25C;" => "money_off",
        "&#xE403;" => "monochrome_photos",
        "&#xE7F2;" => "mood",
        "&#xE7F3;" => "mood_bad",
        "&#xE619;" => "more",
        "&#xE5D3;" => "more_horiz",
        "&#xE5D4;" => "more_vert",
        "&#xE323;" => "mouse",
        "&#xE02C;" => "movie",
        "&#xE404;" => "movie_creation",
        "&#xE405;" => "music_note",
        "&#xE55C;" => "my_location",
        "&#xE406;" => "nature",
        "&#xE407;" => "nature_people",
        "&#xE408;" => "navigate_before",
        "&#xE409;" => "navigate_next",
        "&#xE55D;" => "navigation",
        "&#xE1B9;" => "network_cell",
        "&#xE61A;" => "network_locked",
        "&#xE1BA;" => "network_wifi",
        "&#xE031;" => "new_releases",
        "&#xE1BB;" => "nfc",
        "&#xE0CC;" => "no_sim",
        "&#xE033;" => "not_interested",
        "&#xE89C;" => "note_add",
        "&#xE7F4;" => "notifications",
        "&#xE7F7;" => "notifications_active",
        "&#xE7F5;" => "notifications_none",
        "&#xE7F6;" => "notifications_off",
        "&#xE7F8;" => "notifications_paused",
        "&#xE90A;" => "offline_pin",
        "&#xE63A;" => "ondemand_video",
        "&#xE89D;" => "open_in_browser",
        "&#xE89E;" => "open_in_new",
        "&#xE89F;" => "open_with",
        "&#xE7F9;" => "pages",
        "&#xE8A0;" => "pageview",
        "&#xE40A;" => "palette",
        "&#xE40B;" => "panorama",
        "&#xE40C;" => "panorama_fish_eye",
        "&#xE40D;" => "panorama_horizontal",
        "&#xE40E;" => "panorama_vertical",
        "&#xE40F;" => "panorama_wide_angle",
        "&#xE7FA;" => "party_mode",
        "&#xE034;" => "pause",
        "&#xE035;" => "pause_circle_filled",
        "&#xE036;" => "pause_circle_outline",
        "&#xE8A1;" => "payment",
        "&#xE7FB;" => "people",
        "&#xE7FC;" => "people_outline",
        "&#xE8A2;" => "perm_camera_mic",
        "&#xE8A3;" => "perm_contact_calendar",
        "&#xE8A4;" => "perm_data_setting",
        "&#xE8A5;" => "perm_device_information",
        "&#xE8A6;" => "perm_identity",
        "&#xE8A7;" => "perm_media",
        "&#xE8A8;" => "perm_phone_msg",
        "&#xE8A9;" => "perm_scan_wifi",
        "&#xE7FD;" => "person",
        "&#xE7FE;" => "person_add",
        "&#xE7FF;" => "person_outline",
        "&#xE55A;" => "person_pin",
        "&#xE63B;" => "personal_video",
        "&#xE0CD;" => "phone",
        "&#xE324;" => "phone_android",
        "&#xE61B;" => "phone_bluetooth_speaker",
        "&#xE61C;" => "phone_forwarded",
        "&#xE61D;" => "phone_in_talk",
        "&#xE325;" => "phone_iphone",
        "&#xE61E;" => "phone_locked",
        "&#xE61F;" => "phone_missed",
        "&#xE620;" => "phone_paused",
        "&#xE326;" => "phonelink",
        "&#xE0DB;" => "phonelink_erase",
        "&#xE0DC;" => "phonelink_lock",
        "&#xE327;" => "phonelink_off",
        "&#xE0DD;" => "phonelink_ring",
        "&#xE0DE;" => "phonelink_setup",
        "&#xE410;" => "photo",
        "&#xE411;" => "photo_album",
        "&#xE412;" => "photo_camera",
        "&#xE413;" => "photo_library",
        "&#xE432;" => "photo_size_select_actual",
        "&#xE433;" => "photo_size_select_large",
        "&#xE434;" => "photo_size_select_small",
        "&#xE415;" => "picture_as_pdf",
        "&#xE8AA;" => "picture_in_picture",
        "&#xE55E;" => "pin_drop",
        "&#xE55F;" => "place",
        "&#xE037;" => "play_arrow",
        "&#xE038;" => "play_circle_filled",
        "&#xE039;" => "play_circle_outline",
        "&#xE906;" => "play_for_work",
        "&#xE03B;" => "playlist_add",
        "&#xE800;" => "plus_one",
        "&#xE801;" => "poll",
        "&#xE8AB;" => "polymer",
        "&#xE0CE;" => "portable_wifi_off",
        "&#xE416;" => "portrait",
        "&#xE63C;" => "power",
        "&#xE336;" => "power_input",
        "&#xE8AC;" => "power_settings_new",
        "&#xE0DF;" => "present_to_all",
        "&#xE8AD;" => "print",
        "&#xE80B;" => "public",
        "&#xE255;" => "publish",
        "&#xE8AE;" => "query_builder",
        "&#xE8AF;" => "question_answer",
        "&#xE03C;" => "queue",
        "&#xE03D;" => "queue_music",
        "&#xE03E;" => "radio",
        "&#xE837;" => "radio_button_checked",
        "&#xE836;" => "radio_button_unchecked",
        "&#xE560;" => "rate_review",
        "&#xE8B0;" => "receipt",
        "&#xE03F;" => "recent_actors",
        "&#xE8B1;" => "redeem",
        "&#xE15A;" => "redo",
        "&#xE5D5;" => "refresh",
        "&#xE15B;" => "remove",
        "&#xE15C;" => "remove_circle",
        "&#xE15D;" => "remove_circle_outline",
        "&#xE417;" => "remove_red_eye",
        "&#xE8FE;" => "reorder",
        "&#xE040;" => "repeat",
        "&#xE041;" => "repeat_one",
        "&#xE042;" => "replay",
        "&#xE059;" => "replay_10",
        "&#xE05A;" => "replay_30",
        "&#xE05B;" => "replay_5",
        "&#xE15E;" => "reply",
        "&#xE15F;" => "reply_all",
        "&#xE160;" => "report",
        "&#xE8B2;" => "report_problem",
        "&#xE561;" => "restaurant_menu",
        "&#xE8B3;" => "restore",
        "&#xE0D1;" => "ring_volume",
        "&#xE8B4;" => "room",
        "&#xE418;" => "rotate_90_degrees_ccw",
        "&#xE419;" => "rotate_left",
        "&#xE41A;" => "rotate_right",
        "&#xE328;" => "router",
        "&#xE562;" => "satellite",
        "&#xE161;" => "save",
        "&#xE329;" => "scanner",
        "&#xE8B5;" => "schedule",
        "&#xE80C;" => "school",
        "&#xE1BE;" => "screen_lock_landscape",
        "&#xE1BF;" => "screen_lock_portrait",
        "&#xE1C0;" => "screen_lock_rotation",
        "&#xE1C1;" => "screen_rotation",
        "&#xE623;" => "sd_card",
        "&#xE1C2;" => "sd_storage",
        "&#xE8B6;" => "search",
        "&#xE32A;" => "security",
        "&#xE162;" => "select_all",
        "&#xE163;" => "send",
        "&#xE8B8;" => "settings",
        "&#xE8B9;" => "settings_applications",
        "&#xE8BA;" => "settings_backup_restore",
        "&#xE8BB;" => "settings_bluetooth",
        "&#xE8BD;" => "settings_brightness",
        "&#xE8BC;" => "settings_cell",
        "&#xE8BE;" => "settings_ethernet",
        "&#xE8BF;" => "settings_input_antenna",
        "&#xE8C0;" => "settings_input_component",
        "&#xE8C1;" => "settings_input_composite",
        "&#xE8C2;" => "settings_input_hdmi",
        "&#xE8C3;" => "settings_input_svideo",
        "&#xE8C4;" => "settings_overscan",
        "&#xE8C5;" => "settings_phone",
        "&#xE8C6;" => "settings_power",
        "&#xE8C7;" => "settings_remote",
        "&#xE1C3;" => "settings_system_daydream",
        "&#xE8C8;" => "settings_voice",
        "&#xE80D;" => "share",
        "&#xE8C9;" => "shop",
        "&#xE8CA;" => "shop_two",
        "&#xE8CB;" => "shopping_basket",
        "&#xE8CC;" => "shopping_cart",
        "&#xE043;" => "shuffle",
        "&#xE1C8;" => "signal_cellular_4_bar",
        "&#xE1CD;" => "signal_cellular_connected_no_internet_4_bar",
        "&#xE1CE;" => "signal_cellular_no_sim",
        "&#xE1CF;" => "signal_cellular_null",
        "&#xE1D0;" => "signal_cellular_off",
        "&#xE1D8;" => "signal_wifi_4_bar",
        "&#xE1D9;" => "signal_wifi_4_bar_lock",
        "&#xE1DA;" => "signal_wifi_off",
        "&#xE32B;" => "sim_card",
        "&#xE624;" => "sim_card_alert",
        "&#xE044;" => "skip_next",
        "&#xE045;" => "skip_previous",
        "&#xE41B;" => "slideshow",
        "&#xE32C;" => "smartphone",
        "&#xE625;" => "sms",
        "&#xE626;" => "sms_failed",
        "&#xE046;" => "snooze",
        "&#xE164;" => "sort",
        "&#xE053;" => "sort_by_alpha",
        "&#xE256;" => "space_bar",
        "&#xE32D;" => "speaker",
        "&#xE32E;" => "speaker_group",
        "&#xE8CD;" => "speaker_notes",
        "&#xE0D2;" => "speaker_phone",
        "&#xE8CE;" => "spellcheck",
        "&#xE838;" => "star",
        "&#xE83A;" => "star_border",
        "&#xE839;" => "star_half",
        "&#xE8D0;" => "stars",
        "&#xE0D3;" => "stay_current_landscape",
        "&#xE0D4;" => "stay_current_portrait",
        "&#xE0D5;" => "stay_primary_landscape",
        "&#xE0D6;" => "stay_primary_portrait",
        "&#xE047;" => "stop",
        "&#xE1DB;" => "storage",
        "&#xE8D1;" => "store",
        "&#xE563;" => "store_mall_directory",
        "&#xE41C;" => "straighten",
        "&#xE257;" => "strikethrough_s",
        "&#xE41D;" => "style",
        "&#xE8D2;" => "subject",
        "&#xE048;" => "subtitles",
        "&#xE8D3;" => "supervisor_account",
        "&#xE049;" => "surround_sound",
        "&#xE0D7;" => "swap_calls",
        "&#xE8D4;" => "swap_horiz",
        "&#xE8D5;" => "swap_vert",
        "&#xE8D6;" => "swap_vertical_circle",
        "&#xE41E;" => "switch_camera",
        "&#xE41F;" => "switch_video",
        "&#xE627;" => "sync",
        "&#xE628;" => "sync_disabled",
        "&#xE629;" => "sync_problem",
        "&#xE62A;" => "system_update",
        "&#xE8D7;" => "system_update_alt",
        "&#xE8D8;" => "tab",
        "&#xE8D9;" => "tab_unselected",
        "&#xE32F;" => "tablet",
        "&#xE330;" => "tablet_android",
        "&#xE331;" => "tablet_mac",
        "&#xE420;" => "tag_faces",
        "&#xE62B;" => "tap_and_play",
        "&#xE564;" => "terrain",
        "&#xE165;" => "text_format",
        "&#xE0D8;" => "textsms",
        "&#xE421;" => "texture",
        "&#xE8DA;" => "theaters",
        "&#xE8DB;" => "thumb_down",
        "&#xE8DC;" => "thumb_up",
        "&#xE8DD;" => "thumbs_up_down",
        "&#xE62C;" => "time_to_leave",
        "&#xE422;" => "timelapse",
        "&#xE425;" => "timer",
        "&#xE423;" => "timer_10",
        "&#xE424;" => "timer_3",
        "&#xE426;" => "timer_off",
        "&#xE8DE;" => "toc",
        "&#xE8DF;" => "today",
        "&#xE8E0;" => "toll",
        "&#xE427;" => "tonality",
        "&#xE332;" => "toys",
        "&#xE8E1;" => "track_changes",
        "&#xE565;" => "traffic",
        "&#xE428;" => "transform",
        "&#xE8E2;" => "translate",
        "&#xE8E3;" => "trending_down",
        "&#xE8E4;" => "trending_flat",
        "&#xE8E5;" => "trending_up",
        "&#xE429;" => "tune",
        "&#xE8E6;" => "turned_in",
        "&#xE8E7;" => "turned_in_not",
        "&#xE333;" => "tv",
        "&#xE166;" => "undo",
        "&#xE5D6;" => "unfold_less",
        "&#xE5D7;" => "unfold_more",
        "&#xE1E0;" => "usb",
        "&#xE8E8;" => "verified_user",
        "&#xE258;" => "vertical_align_bottom",
        "&#xE259;" => "vertical_align_center",
        "&#xE25A;" => "vertical_align_top",
        "&#xE62D;" => "vibration",
        "&#xE04A;" => "video_library",
        "&#xE04B;" => "videocam",
        "&#xE04C;" => "videocam_off",
        "&#xE8E9;" => "view_agenda",
        "&#xE8EA;" => "view_array",
        "&#xE8EB;" => "view_carousel",
        "&#xE8EC;" => "view_column",
        "&#xE42A;" => "view_comfy",
        "&#xE42B;" => "view_compact",
        "&#xE8ED;" => "view_day",
        "&#xE8EE;" => "view_headline",
        "&#xE8EF;" => "view_list",
        "&#xE8F0;" => "view_module",
        "&#xE8F1;" => "view_quilt",
        "&#xE8F2;" => "view_stream",
        "&#xE8F3;" => "view_week",
        "&#xE435;" => "vignette",
        "&#xE8F4;" => "visibility",
        "&#xE8F5;" => "visibility_off",
        "&#xE62E;" => "voice_chat",
        "&#xE0D9;" => "voicemail",
        "&#xE04D;" => "volume_down",
        "&#xE04E;" => "volume_mute",
        "&#xE04F;" => "volume_off",
        "&#xE050;" => "volume_up",
        "&#xE0DA;" => "vpn_key",
        "&#xE62F;" => "vpn_lock",
        "&#xE1BC;" => "wallpaper",
        "&#xE002;" => "warning",
        "&#xE334;" => "watch",
        "&#xE42C;" => "wb_auto",
        "&#xE42D;" => "wb_cloudy",
        "&#xE42E;" => "wb_incandescent",
        "&#xE436;" => "wb_iridescent",
        "&#xE430;" => "wb_sunny",
        "&#xE63D;" => "wc",
        "&#xE051;" => "web",
        "&#xE80E;" => "whatshot",
        "&#xE1BD;" => "widgets",
        "&#xE63E;" => "wifi",
        "&#xE1E1;" => "wifi_lock",
        "&#xE1E2;" => "wifi_tethering",
        "&#xE8F9;" => "work",
        "&#xE25B;" => "wrap_text",
        "&#xE8FA;" => "youtube_searched_for",
        "&#xE8FF;" => "zoom_in",
        "&#xE900;" => "zoom_out"
    );
}