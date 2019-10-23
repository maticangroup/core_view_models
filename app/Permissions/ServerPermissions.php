<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 23/07/19
 * Time: 15:37
 */

namespace Matican\Permissions;


class ServerPermissions
{
    const repository_company_all = 'repository_company_all';
    const repository_company_fetch = 'repository_company_fetch';
    const repository_company_delete = 'repository_company_delete';
    const repository_company_update = 'repository_company_update';
    const repository_company_new = 'repository_company_new';
    const repository_company_get_phones = 'repository_company_get_phones';
    const repository_company_add_phone = 'repository_company_add_phone';
    const repository_company_remove_phone = 'repository_company_remove_phone';
    const repository_company_get_locations = 'repository_company_get_locations';
    const repository_company_add_location = 'repository_company_add_location';
    const repository_company_remove_location = 'repository_company_remove_location';
    const repository_company_get_related_people = 'repository_company_get_related_people';
    const repository_company_remove_related_person = 'repository_company_remove_related_person';
    const repository_company_add_related_person = 'repository_company_add_related_person';
    const repository_company_get_employees = 'repository_company_get_employees';
    const repository_company_add_employee = 'repository_company_add_employee';
    const repository_company_remove_employee = 'repository_company_remove_employee';

    const repository_brand_all = 'repository_brand_all';
    const repository_brand_fetch = 'repository_brand_fetch';
    const repository_brand_update = 'repository_brand_update';
    const repository_brand_new = 'repository_brand_new';
    const repository_brand_delete = 'repository_brand_delete';
    const repository_brand_add_supplier = 'repository_brand_add_supplier';
    const repository_brand_remove_supplier = 'repository_brand_remove_supplier';
    const repository_brand_get_suppliers = 'repository_brand_get_suppliers';
    const repository_brand_set_logo = 'repository_brand_set_logo';

    const repository_color_all = 'repository_color_all';
    const repository_color_fetch = 'repository_color_fetch';
    const repository_color_delete = 'repository_color_delete';
    const repository_color_update = 'repository_color_update';
    const repository_color_new = 'repository_color_new';
    const repository_color_change_status = 'repository_color_change_status';

    const repository_guarantee_all = 'repository_guarantee_all';
    const repository_guarantee_fetch = 'repository_guarantee_fetch';
    const repository_guarantee_delete = 'repository_guarantee_delete';
    const repository_guarantee_update = 'repository_guarantee_update';
    const repository_guarantee_new = 'repository_guarantee_new';
    const repository_guarantee_change_guarantee_status = 'repository_guarantee_change_guarantee_status';
    const repository_guarantee_get_providers = 'repository_guarantee_get_providers';
    const repository_guarantee_add_provider = 'repository_guarantee_add_provider';
    const repository_guarantee_fetch_provider = 'repository_guarantee_fetch_provider';
    const repository_guarantee_update_provider = 'repository_guarantee_update_provider';
    const repository_guarantee_change_provider_status = 'repository_guarantee_change_provider_status';
    const repository_guarantee_get_durations = 'repository_guarantee_get_durations';
    const repository_guarantee_add_duration = 'repository_guarantee_add_duration';
    const repository_guarantee_fetch_duration = 'repository_guarantee_fetch_duration';
    const repository_guarantee_update_duration = 'repository_guarantee_update_duration';
    const repository_guarantee_change_duration_status = 'repository_guarantee_change_duration_status';


    const repository_itemcategory_all = 'repository_itemcategory_all';
    const repository_itemcategory_fetch = 'repository_itemcategory_fetch';
    const repository_itemcategory_delete = 'repository_itemcategory_delete';
    const repository_itemcategory_update = 'repository_itemcategory_update';
    const repository_itemcategory_new = 'repository_itemcategory_new';
    const repository_itemcategory_assign_keys = 'repository_itemcategory_assign_keys';


    const repository_item_all = 'repository_item_all';
    const repository_item_fetch = 'repository_item_fetch';
    const repository_item_update = 'repository_item_update';
    const repository_item_new = 'repository_item_new';
    const repository_item_get_types = 'repository_item_get_types';
    const repository_item_add_barcode = 'repository_item_add_barcode';
    const repository_item_remove_barcode = 'repository_item_remove_barcode';
    const repository_item_add_available_guarantee = 'repository_item_add_available_guarantee';
    const repository_item_remove_available_guarantee = 'repository_item_remove_available_guarantee';
    const repository_item_add_available_supplier = 'repository_item_add_available_supplier';
    const repository_item_remove_available_supplier = 'repository_item_remove_available_supplier';
    const repository_item_add_available_color = 'repository_item_add_available_color';
    const repository_item_remove_available_color = 'repository_item_remove_available_color';
    const repository_item_update_category = 'repository_item_update_category';
    const repository_item_add_spec_key_value = 'repository_item_add_spec_key_value';
    const repository_item_remove_spec_key_value = 'repository_item_remove_spec_key_value';
    const repository_item_fetch_products = 'repository_item_fetch_products';
    const repository_item_add_image = 'repository_item_add_image';
    const repository_item_remove_image = 'repository_item_remove_image';

    const repository_location_remove = 'repository_location_remove';
    const repository_location_new = 'repository_location_new';
    const repository_location_get_provinces = 'repository_location_get_provinces';


    const repository_offdays_all = 'repository_offdays_all';
    const repository_offdays_fetch = 'repository_offdays_fetch';
    const repository_offdays_delete = 'repository_offdays_delete';
    const repository_offdays_update = 'repository_offdays_update';
    const repository_offdays_new = 'repository_offdays_new';

    const repository_person_all = 'repository_person_all';
    const repository_person_fetch = 'repository_person_fetch';
    const repository_person_delete = 'repository_person_delete';
    const repository_person_update = 'repository_person_update';
    const repository_person_quick_register = 'repository_person_quick_register';
    const repository_person_new = 'repository_person_new';
    const repository_person_get_favorite_items = 'repository_person_get_favorite_items';
    const repository_person_add_favorite_item = 'repository_person_add_favorite_item';
    const repository_person_remove_favorite_item = 'repository_person_remove_favorite_item';
    const repository_person_add_coupon_usage = 'repository_person_add_coupon_usage';
    const repository_person_get_coupon_usages = 'repository_person_get_coupon_usages';
    const repository_person_get_account_balance = 'repository_person_get_account_balance';
    const repository_person_add_address = 'repository_person_add_address';
    const repository_person_remove_address = 'repository_person_remove_address';
    const repository_person_get_all_addresses = 'repository_person_get_all_addresses';
    const repository_person_update_address = 'repository_person_update_address';
    const repository_person_get_related_companies = 'repository_person_get_related_companies';
    const repository_person_add_related_company = 'repository_person_add_related_company';
    const repository_person_remove_related_company = 'repository_person_remove_related_company';
    const repository_person_get_coupon_groups = 'repository_person_get_coupon_groups';
    const repository_person_get_clients = 'repository_person_get_clients';
    const repository_person_remove_bank_account = 'repository_person_remove_bank_account';

    const repository_size_all = 'repository_size_all';
    const repository_size_fetch = 'repository_size_fetch';
    const repository_size_delete = 'repository_size_delete';
    const repository_size_update = 'repository_size_update';
    const repository_size_new = 'repository_size_new';
    const repository_size_change_size_status = 'repository_size_change_size_status';


    const repository_specgroup_all = 'repository_specgroup_all';
    const repository_specgroup_fetch = 'repository_specgroup_fetch';
    const repository_specgroup_delete = 'repository_specgroup_delete';
    const repository_specgroup_update = 'repository_specgroup_update';
    const repository_specgroup_new = 'repository_specgroup_new';
    const repository_specgroup_set_display_order = 'repository_specgroup_set_display_order';
    const repository_specgroup_add_spec_key = 'repository_specgroup_add_spec_key';
    const repository_specgroup_remove_spec_key = 'repository_specgroup_remove_spec_key';
    const repository_specgroup_get_spec_keys = 'repository_specgroup_get_spec_keys';

    const repository_speckey_fetch = 'repository_speckey_fetch';
    const repository_speckey_delete = 'repository_speckey_delete';
    const repository_speckey_update = 'repository_speckey_update';
    const repository_speckey_new = 'repository_speckey_new';
    const repository_speckey_submit_key_value = 'repository_speckey_submit_key_value';
    const repository_speckey_remove_key_value = 'repository_speckey_remove_key_value';

    const repository_weekdays_all = 'repository_weekdays_all';
    const repository_weekdays_fetch = 'repository_weekdays_fetch';
    const repository_weekdays_delete = 'repository_weekdays_delete';
    const repository_weekdays_edit = 'repository_weekdays_edit';
    const repository_weekdays_new = 'repository_weekdays_new';

    const accounting_coupongroup_all = 'accounting_coupongroup_all';
    const accounting_coupongroup_fetch = 'accounting_coupongroup_fetch';
    const accounting_coupongroup_confirm = 'accounting_coupongroup_confirm';
    const accounting_coupongroup_stop = 'accounting_coupongroup_stop';
    const accounting_coupongroup_delete = 'accounting_coupongroup_delete';
    const accounting_coupongroup_edit = 'accounting_coupongroup_edit';
    const accounting_coupongroup_new = 'accounting_coupongroup_new';
    const accounting_coupongroup_add_allowed_customer = 'accounting_coupongroup_add_allowed_customer';
    const accounting_coupongroup_remove_allowed_customer = 'accounting_coupongroup_remove_allowed_customer';
    const accounting_coupongroup_add_usage = 'accounting_coupongroup_add_usage';

    const accounting_giftcardgroup_all = 'accounting_giftcardgroup_all';
    const accounting_giftcardgroup_fetch = 'accounting_giftcardgroup_fetch';
    const accounting_giftcardgroup_new = 'accounting_giftcardgroup_new';
    const accounting_giftcardgroup_confirm = 'accounting_giftcardgroup_confirm';
    const accounting_giftcardgroup_stop = 'accounting_giftcardgroup_stop';
    const accounting_giftcardgroup_add_usage = 'accounting_giftcardgroup_add_usage';
    const accounting_giftcardgroup_set_card_status = 'accounting_giftcardgroup_set_card_status';

    const accounting_invoice_all = 'accounting_invoice_all';
    const accounting_invoice_fetch = 'accounting_invoice_fetch';
    const accounting_invoice_new = 'accounting_invoice_new';
    const accounting_invoice_add_invoice_item = 'accounting_invoice_add_invoice_item';
    const accounting_invoice_remove_invoice_item = 'accounting_invoice_remove_invoice_item';
    const accounting_invoice_finalize_invoice = 'accounting_invoice_finalize_invoice';
    const accounting_invoice_rethink_invoice = 'accounting_invoice_rethink_invoice';
    const accounting_invoice_get_all_invoice_groups = 'accounting_invoice_get_all_invoice_groups';
    const accounting_installmentrequest_all = 'accounting_installmentrequest_all';
    const accounting_installmentrequest_update_user_info = 'accounting_installmentrequest_update_user_info';
    const accounting_installmentrequest_new = 'accounting_installmentrequest_new';
    const accounting_installmentrequest_change_status = 'accounting_installmentrequest_change_status';
    const accounting_installmentrequest_all_user_requests = 'accounting_installmentrequest_all_user_requests';

    const accounting_paymentrequest_all = 'accounting_paymentrequest_all';
    const accounting_paymentrequest_fetch = 'accounting_paymentrequest_fetch';
    const accounting_paymentrequest_delete = 'accounting_paymentrequest_delete';
    const accounting_paymentrequest_edit = 'accounting_paymentrequest_edit';
    const accounting_paymentrequest_new = 'accounting_paymentrequest_new';
    const accounting_paymentrequest_add_payment = 'accounting_paymentrequest_add_payment';
    const accounting_paymentrequest_confirm_payment = 'accounting_paymentrequest_confirm_payment';
    const accounting_paymentrequest_set_type = 'accounting_paymentrequest_set_type';
    const accounting_paymentrequest_set_status = 'accounting_paymentrequest_set_status';
    const accounting_paymentrequest_get_payment_methods = 'accounting_paymentrequest_get_payment_methods';

    const authentication_client_all = 'authentication_client_all';
    const authentication_client_fetch = 'authentication_client_fetch';
    const authentication_client_new = 'authentication_client_new';
    const authentication_client_update = 'authentication_client_update';

    const authentication_permission_fetch = 'authentication_permission_fetch';
    const authentication_permission_delete = 'authentication_permission_delete';
    const authentication_permission_update = 'authentication_permission_update';
    const authentication_permission_fetch_file = 'authentication_permission_fetch_file';

    const authentication_permissiongroup_all = 'authentication_permissiongroup_all';

    const authentication_role_new = 'authentication_role_new';
    const authentication_role_update = 'authentication_role_update';
    const authentication_role_fetch = 'authentication_role_fetch';
    const authentication_role_all = 'authentication_role_all';
    const authentication_role_grant_permission = 'authentication_role_grant_permission';
    const authentication_role_deny_permission = 'authentication_role_deny_permission';
    const authentication_role_get_roles_permissions = 'authentication_role_get_roles_permissions';

    const authentication_user_all = 'authentication_user_all';
    const authentication_user_set_role = 'authentication_user_set_role';
    const authentication_user_login = 'authentication_user_login';
    const authentication_user_logout = 'authentication_user_logout';
    const authentication_user_block = 'authentication_user_block';
    const authentication_user_send_password = 'authentication_user_send_password';
    const authentication_user_send_password_to_user = 'authentication_user_send_password_to_user';
    const authentication_user_check_status = 'authentication_user_check_status';

    const crm_customergroup_new = 'crm_customergroup_new';
    const crm_customergroup_all = 'crm_customergroup_all';
    const crm_customergroup_fetch = 'crm_customergroup_fetch';
    const crm_customergroup_add_person = 'crm_customergroup_add_person';
    const crm_customergroup_remove_person = 'crm_customergroup_remove_person';
    const crm_customergroup_update = 'crm_customergroup_update';
    const crm_customergroup_set_status = 'crm_customergroup_set_status';

    const delivery_deliverymethod_all = 'delivery_deliverymethod_all';
    const delivery_deliverymethod_fetch = 'delivery_deliverymethod_fetch';
    const delivery_deliverymethod_update = 'delivery_deliverymethod_update';
    const delivery_deliverymethod_new = 'delivery_deliverymethod_new';
    const delivery_deliverymethod_add_delivery_person = 'delivery_deliverymethod_add_delivery_person';
    const delivery_deliverymethod_remove_delivery_person = 'delivery_deliverymethod_remove_delivery_person';
    const delivery_deliverymethod_add_dispatch = 'delivery_deliverymethod_add_dispatch';
    const delivery_deliverymethod_add_queue = 'delivery_deliverymethod_add_queue';
    const delivery_deliverymethod_remove_queue = 'delivery_deliverymethod_remove_queue';
    const delivery_deliverymethod_add_allowed_size = 'delivery_deliverymethod_add_allowed_size';
    const delivery_deliverymethod_remove_allowed_size = 'delivery_deliverymethod_remove_allowed_size';
    const delivery_deliverymethod_get_all_types = 'delivery_deliverymethod_get_all_types';
    const delivery_deliverymethod_change_queue_status = 'delivery_deliverymethod_change_queue_status';
    const delivery_deliverymethod_change_delivery_method_status = 'delivery_deliverymethod_change_delivery_method_status';
    const delivery_deliverymethod_get_allowed_delivery_methods = 'delivery_deliverymethod_get_allowed_delivery_methods';
    const delivery_deliverymethod_get_available_queues = 'delivery_deliverymethod_get_available_queues';

    const delivery_deliveryperson_all = 'delivery_deliveryperson_all';
    const delivery_deliveryperson_fetch = 'delivery_deliveryperson_fetch';
    const delivery_deliveryperson_update = 'delivery_deliveryperson_update';
    const delivery_deliveryperson_add_allowed_district = 'delivery_deliveryperson_add_allowed_district';
    const delivery_deliveryperson_remove_allowed_district = 'delivery_deliveryperson_remove_allowed_district';
    const delivery_deliveryperson_get_delivery_method_people = 'delivery_deliveryperson_get_delivery_method_people';
    const delivery_deliveryperson_change_status = 'delivery_deliveryperson_change_status';

    const delivery_dispatch_all = 'delivery_dispatch_all';
    const delivery_dispatch_fetch = 'delivery_dispatch_fetch';
    const delivery_dispatch_delete = 'delivery_dispatch_delete';
    const delivery_dispatch_edit = 'delivery_dispatch_edit';
    const delivery_dispatch_new = 'delivery_dispatch_new';
    const delivery_dispatch_set_origin = 'delivery_dispatch_set_origin';
    const delivery_dispatch_set_destination = 'delivery_dispatch_set_destination';
    const delivery_dispatch_set_delivery_person = 'delivery_dispatch_set_delivery_person';
    const delivery_dispatch_set_status = 'delivery_dispatch_set_status';
    const delivery_dispatch_set_queue = 'delivery_dispatch_set_queue';
    const delivery_dispatch_set_delivery_method = 'delivery_dispatch_set_delivery_method';
    const delivery_dispatch_finalize_dispatch = 'delivery_dispatch_finalize_dispatch';
    const delivery_dispatch_rethink_dispatch = 'delivery_dispatch_rethink_dispatch';
    const delivery_dispatch_set_dispatch_queue = 'delivery_dispatch_set_dispatch_queue';
    const delivery_dispatch_set_dispatch_location = 'delivery_dispatch_set_dispatch_location';
    const delivery_dispatch_confirm_dispatch_payment = 'delivery_dispatch_confirm_dispatch_payment';

    const inventory_inventory_all = 'inventory_inventory_all';
    const inventory_inventory_new = 'inventory_inventory_new';
    const inventory_inventory_fetch = 'inventory_inventory_fetch';
    const inventory_inventory_add_phone = 'inventory_inventory_add_phone';
    const inventory_inventory_remove_phone = 'inventory_inventory_remove_phone';
    const inventory_inventory_update = 'inventory_inventory_update';
    const inventory_inventory_change_status = 'inventory_inventory_change_status';
    const inventory_inventory_all_item_products = 'inventory_inventory_all_item_products';
    const inventory_inventory_inventory_all_item_products = 'inventory_inventory_inventory_all_item_products';
    const inventory_inventory_get_inventory_item_products = 'inventory_inventory_get_inventory_item_products';
    const inventory_inventory_get_inventory_products = 'inventory_inventory_get_inventory_products';
    const inventory_inventory_get_item_products = 'inventory_inventory_get_item_products';

    const inventory_shelve_new = 'inventory_shelve_new';
    const inventory_shelve_fetch = 'inventory_shelve_fetch';
    const inventory_shelve_add_phone = 'inventory_shelve_add_phone';
    const inventory_shelve_remove_phone = 'inventory_shelve_remove_phone';
    const inventory_shelve_all = 'inventory_shelve_all';
    const inventory_shelve_update = 'inventory_shelve_update';
    const inventory_shelve_change_status = 'inventory_shelve_change_status';
    const inventory_shelve_shelve_all_item_products = 'inventory_shelve_shelve_all_item_products';
    const inventory_shelve_get_shelve_item_products = 'inventory_shelve_get_shelve_item_products';
    const inventory_shelve_get_shelve_products = 'inventory_shelve_get_shelve_products';
    const inventory_shelve_get_shelves_products = 'inventory_shelve_get_shelves_products';

    const inventory_transferdeed_all = 'inventory_transferdeed_all';
    const inventory_transferdeed_fetch = 'inventory_transferdeed_fetch';
    const inventory_transferdeed_delete = 'inventory_transferdeed_delete';
    const inventory_transferdeed_update = 'inventory_transferdeed_update';
    const inventory_transferdeed_new = 'inventory_transferdeed_new';
    const inventory_transferdeed_import_to_inventory = 'inventory_transferdeed_import_to_inventory';
    const inventory_transferdeed_add_product_to_deed = 'inventory_transferdeed_add_product_to_deed';
    const inventory_transferdeed_remove_product_from_deed = 'inventory_transferdeed_remove_product_from_deed';
    const inventory_transferdeed_confirm_deed = 'inventory_transferdeed_confirm_deed';
    const inventory_transferdeed_transfer_deed = 'inventory_transferdeed_transfer_deed';

    const sale_offergroup_all = 'sale_offergroup_all';
    const sale_offergroup_fetch = 'sale_offergroup_fetch';
    const sale_offergroup_new = 'sale_offergroup_new';
    const sale_offergroup_update = 'sale_offergroup_update';
    const sale_offergroup_add_product = 'sale_offergroup_add_product';
    const sale_offergroup_remove_product = 'sale_offergroup_remove_product';
    const sale_offergroup_change_status = 'sale_offergroup_change_status';

    const sale_order_update = 'sale_order_update';
    const sale_order_new = 'sale_order_new';
    const sale_order_all = 'sale_order_all';
    const sale_order_fetch = 'sale_order_fetch';
    const sale_order_add_product = 'sale_order_add_product';
    const sale_order_remove_product = 'sale_order_remove_product';
    const sale_order_accept_order_list = 'sale_order_accept_order_list';
    const sale_order_ignore_order_list = 'sale_order_ignore_order_list';
    const sale_order_save_order = 'sale_order_save_order';
    const sale_order_confirm_order = 'sale_order_confirm_order';
    const sale_order_get_person_orders = 'sale_order_get_person_orders';

    const sale_pricingdeed_all = 'sale_pricingdeed_all';
    const sale_pricingdeed_fetch = 'sale_pricingdeed_fetch';
    const sale_pricingdeed_fetch_confirmed = 'sale_pricingdeed_fetch_confirmed';
    const sale_pricingdeed_delete = 'sale_pricingdeed_delete';
    const sale_pricingdeed_update = 'sale_pricingdeed_update';
    const sale_pricingdeed_new = 'sale_pricingdeed_new';
    const sale_pricingdeed_accept_pricing_list = 'sale_pricingdeed_accept_pricing_list';
    const sale_pricingdeed_ignore_pricing_list = 'sale_pricingdeed_ignore_pricing_list';
    const sale_pricingdeed_save_pricing_list = 'sale_pricingdeed_save_pricing_list';
    const sale_pricingdeed_add_product = 'sale_pricingdeed_add_product';
    const sale_pricingdeed_remove_product = 'sale_pricingdeed_remove_product';
    const sale_pricingdeed_add_offer_group_products = 'sale_pricingdeed_add_offer_group_products';
    const sale_pricingdeed_add_shelve_products = 'sale_pricingdeed_add_shelve_products';
    const sale_pricingdeed_add_pricing_deed_products = 'sale_pricingdeed_add_pricing_deed_products';
    const sale_pricingdeed_apply_pricing_deed = 'sale_pricingdeed_apply_pricing_deed';

    const repository_forbiddenwords_all = 'repository_forbiddenwords_all';
    const repository_forbiddenwords_fetch = 'repository_forbiddenwords_fetch';
    const repository_forbiddenwords_delete = 'repository_forbiddenwords_delete';
    const repository_forbiddenwords_new = 'repository_forbiddenwords_new';
}