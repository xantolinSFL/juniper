<?php

namespace Juniper\Webservice;

class WebServiceJP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'CheckPaymentRequiredField' => 'Juniper\Webservice\\CheckPaymentRequiredField',
      'JP_CheckPaymentRequiredFieldsRQ' => 'Juniper\Webservice\\JP_CheckPaymentRequiredFieldsRQ',
      'JP_Login' => 'Juniper\Webservice\\JP_Login',
      'JP_RestrictedOptions' => 'Juniper\Webservice\\JP_RestrictedOptions',
      'JP_RestrictedOption' => 'Juniper\Webservice\\JP_RestrictedOption',
      'CheckPaymentRequiredFieldResponse' => 'Juniper\Webservice\\CheckPaymentRequiredFieldResponse',
      'JP_CheckPaymentRequiredFieldsRS' => 'Juniper\Webservice\\JP_CheckPaymentRequiredFieldsRS',
      'ArrayOfJP_ErrorType' => 'Juniper\Webservice\\ArrayOfJP_ErrorType',
      'JP_ErrorType' => 'Juniper\Webservice\\JP_ErrorType',
      'JP_Warnings' => 'Juniper\Webservice\\JP_Warnings',
      'JP_WarningType' => 'Juniper\Webservice\\JP_WarningType',
      'JP_CancelInformation' => 'Juniper\Webservice\\JP_CancelInformation',
      'JP_CheckPaymentRequiredFieldsResponse' => 'Juniper\Webservice\\JP_CheckPaymentRequiredFieldsResponse',
      'ArrayOfJP_RequiredField' => 'Juniper\Webservice\\ArrayOfJP_RequiredField',
      'JP_RequiredField' => 'Juniper\Webservice\\JP_RequiredField',
      'ArrayOfJP_RequiredFieldValue' => 'Juniper\Webservice\\ArrayOfJP_RequiredFieldValue',
      'JP_RequiredFieldValue' => 'Juniper\Webservice\\JP_RequiredFieldValue',
      'CheckPayment' => 'Juniper\Webservice\\CheckPayment',
      'JP_CheckPaymentRQ' => 'Juniper\Webservice\\JP_CheckPaymentRQ',
      'JP_Request' => 'Juniper\Webservice\\JP_Request',
      'CheckPaymentResponse' => 'Juniper\Webservice\\CheckPaymentResponse',
      'JP_CheckPaymentRS' => 'Juniper\Webservice\\JP_CheckPaymentRS',
      'JP_CheckPaymentResponse' => 'Juniper\Webservice\\JP_CheckPaymentResponse',
      'PaymentBooking' => 'Juniper\Webservice\\PaymentBooking',
      'JP_PaymentRQ' => 'Juniper\Webservice\\JP_PaymentRQ',
      'JP_PaymentRequest' => 'Juniper\Webservice\\JP_PaymentRequest',
      'JP_Payment' => 'Juniper\Webservice\\JP_Payment',
      'JP_PaymentPrice' => 'Juniper\Webservice\\JP_PaymentPrice',
      'JP_CreditCardInfo' => 'Juniper\Webservice\\JP_CreditCardInfo',
      'JP_AddressType' => 'Juniper\Webservice\\JP_AddressType',
      'JP_StateProv' => 'Juniper\Webservice\\JP_StateProv',
      'JP_Country' => 'Juniper\Webservice\\JP_Country',
      'JP_Refund' => 'Juniper\Webservice\\JP_Refund',
      'PaymentBookingResponse' => 'Juniper\Webservice\\PaymentBookingResponse',
      'JP_PaymentRS' => 'Juniper\Webservice\\JP_PaymentRS',
      'JP_PaymentReservation' => 'Juniper\Webservice\\JP_PaymentReservation',
      'JP_PaymentInfo' => 'Juniper\Webservice\\JP_PaymentInfo',
      'ShoppingBasketRead' => 'Juniper\Webservice\\ShoppingBasketRead',
      'JP_ShoppingBasketRead' => 'Juniper\Webservice\\JP_ShoppingBasketRead',
      'JP_ShoppingBasket' => 'Juniper\Webservice\\JP_ShoppingBasket',
      'ShoppingBasketReadResponse' => 'Juniper\Webservice\\ShoppingBasketReadResponse',
      'JP_ShoppingBasketResult' => 'Juniper\Webservice\\JP_ShoppingBasketResult',
      'JP_ShoppingBasketItems' => 'Juniper\Webservice\\JP_ShoppingBasketItems',
      'ArrayOfString' => 'Juniper\Webservice\\ArrayOfString',
      'ShoppingBasketSave' => 'Juniper\Webservice\\ShoppingBasketSave',
      'JP_ShoppingBasketSave' => 'Juniper\Webservice\\JP_ShoppingBasketSave',
      'ShoppingBasketSaveResponse' => 'Juniper\Webservice\\ShoppingBasketSaveResponse',
      'HotelBooking' => 'Juniper\Webservice\\HotelBooking',
      'JP_HotelBooking' => 'Juniper\Webservice\\JP_HotelBooking',
      'JP_Paxes' => 'Juniper\Webservice\\JP_Paxes',
      'JP_Pax' => 'Juniper\Webservice\\JP_Pax',
      'JP_Document' => 'Juniper\Webservice\\JP_Document',
      'ArrayOfJP_PhoneNumber' => 'Juniper\Webservice\\ArrayOfJP_PhoneNumber',
      'JP_PhoneNumber' => 'Juniper\Webservice\\JP_PhoneNumber',
      'JP_BillingDataAFIP' => 'Juniper\Webservice\\JP_BillingDataAFIP',
      'ArrayOfJP_Card' => 'Juniper\Webservice\\ArrayOfJP_Card',
      'JP_Card' => 'Juniper\Webservice\\JP_Card',
      'JP_ResidentDiscount' => 'Juniper\Webservice\\JP_ResidentDiscount',
      'JP_LargeFamilyDiscount' => 'Juniper\Webservice\\JP_LargeFamilyDiscount',
      'JP_Holder' => 'Juniper\Webservice\\JP_Holder',
      'JP_RelPax' => 'Juniper\Webservice\\JP_RelPax',
      'ArrayOfJP_PaxSeat' => 'Juniper\Webservice\\ArrayOfJP_PaxSeat',
      'JP_PaxSeat' => 'Juniper\Webservice\\JP_PaxSeat',
      'JP_ExtendedRelPaxBag' => 'Juniper\Webservice\\JP_ExtendedRelPaxBag',
      'JP_ExtendedRelPax' => 'Juniper\Webservice\\JP_ExtendedRelPax',
      'ArrayOfJP_Price' => 'Juniper\Webservice\\ArrayOfJP_Price',
      'JP_Price' => 'Juniper\Webservice\\JP_Price',
      'JP_TotalFixAmounts' => 'Juniper\Webservice\\JP_TotalFixAmounts',
      'JP_Service' => 'Juniper\Webservice\\JP_Service',
      'JP_ServiceTaxes' => 'Juniper\Webservice\\JP_ServiceTaxes',
      'JP_Commissions' => 'Juniper\Webservice\\JP_Commissions',
      'JP_HandlingFees' => 'Juniper\Webservice\\JP_HandlingFees',
      'JP_Discount' => 'Juniper\Webservice\\JP_Discount',
      'JP_BreakdownPrice' => 'Juniper\Webservice\\JP_BreakdownPrice',
      'ArrayOfJP_ConceptBreakdown' => 'Juniper\Webservice\\ArrayOfJP_ConceptBreakdown',
      'JP_ConceptBreakdown' => 'Juniper\Webservice\\JP_ConceptBreakdown',
      'ArrayOfJP_ItemBreakdown' => 'Juniper\Webservice\\ArrayOfJP_ItemBreakdown',
      'JP_ItemBreakdown' => 'Juniper\Webservice\\JP_ItemBreakdown',
      'ArrayOfJP_CommonPriceBreakdown' => 'Juniper\Webservice\\ArrayOfJP_CommonPriceBreakdown',
      'JP_CommonPriceBreakdown' => 'Juniper\Webservice\\JP_CommonPriceBreakdown',
      'ArrayOfInt' => 'Juniper\Webservice\\ArrayOfInt',
      'JP_CommonPriceBreakdownReduced' => 'Juniper\Webservice\\JP_CommonPriceBreakdownReduced',
      'ArrayOfJP_CommonPriceBreakdown1' => 'Juniper\Webservice\\ArrayOfJP_CommonPriceBreakdown1',
      'ArrayOfJP_CommonPriceBreakdown2' => 'Juniper\Webservice\\ArrayOfJP_CommonPriceBreakdown2',
      'JP_CruiseExtendedRelPax' => 'Juniper\Webservice\\JP_CruiseExtendedRelPax',
      'JP_Agent' => 'Juniper\Webservice\\JP_Agent',
      'ArrayOfJP_Comment' => 'Juniper\Webservice\\ArrayOfJP_Comment',
      'JP_Comment' => 'Juniper\Webservice\\JP_Comment',
      'ArrayOfJP_HotelElement' => 'Juniper\Webservice\\ArrayOfJP_HotelElement',
      'JP_HotelElement' => 'Juniper\Webservice\\JP_HotelElement',
      'JP_BaseElement' => 'Juniper\Webservice\\JP_BaseElement',
      'JP_BookingCode' => 'Juniper\Webservice\\JP_BookingCode',
      'ArrayOfJP_RelPaxDist' => 'Juniper\Webservice\\ArrayOfJP_RelPaxDist',
      'JP_RelPaxDist' => 'Juniper\Webservice\\JP_RelPaxDist',
      'ArrayOfJP_RelPax' => 'Juniper\Webservice\\ArrayOfJP_RelPax',
      'JP_HotelRelPaxDist' => 'Juniper\Webservice\\JP_HotelRelPaxDist',
      'ArrayOfJP_RoomCategory' => 'Juniper\Webservice\\ArrayOfJP_RoomCategory',
      'JP_RoomCategory' => 'Juniper\Webservice\\JP_RoomCategory',
      'ArrayOfJP_HotelRoomCode' => 'Juniper\Webservice\\ArrayOfJP_HotelRoomCode',
      'JP_HotelRoomCode' => 'Juniper\Webservice\\JP_HotelRoomCode',
      'JP_InsuranceRelPaxDist' => 'Juniper\Webservice\\JP_InsuranceRelPaxDist',
      'JP_FlightElement' => 'Juniper\Webservice\\JP_FlightElement',
      'JP_FlightBookingInfo' => 'Juniper\Webservice\\JP_FlightBookingInfo',
      'JP_BookingPrice' => 'Juniper\Webservice\\JP_BookingPrice',
      'JP_PriceRange' => 'Juniper\Webservice\\JP_PriceRange',
      'JP_PackageElement' => 'Juniper\Webservice\\JP_PackageElement',
      'JP_PackageBookingInfo' => 'Juniper\Webservice\\JP_PackageBookingInfo',
      'ArrayOfJP_TransferBookingInfo' => 'Juniper\Webservice\\ArrayOfJP_TransferBookingInfo',
      'JP_TransferBookingInfo' => 'Juniper\Webservice\\JP_TransferBookingInfo',
      'JP_TransferOrigin' => 'Juniper\Webservice\\JP_TransferOrigin',
      'JP_MeetingPointInfo' => 'Juniper\Webservice\\JP_MeetingPointInfo',
      'JP_FlightInfo' => 'Juniper\Webservice\\JP_FlightInfo',
      'JP_ShipInfo' => 'Juniper\Webservice\\JP_ShipInfo',
      'JP_TrainInfo' => 'Juniper\Webservice\\JP_TrainInfo',
      'JP_StationInfo' => 'Juniper\Webservice\\JP_StationInfo',
      'JP_TransferDestination' => 'Juniper\Webservice\\JP_TransferDestination',
      'JP_HotelService' => 'Juniper\Webservice\\JP_HotelService',
      'JP_Room' => 'Juniper\Webservice\\JP_Room',
      'ArrayOfJP_ServiceBookingInfo' => 'Juniper\Webservice\\ArrayOfJP_ServiceBookingInfo',
      'JP_ServiceBookingInfo' => 'Juniper\Webservice\\JP_ServiceBookingInfo',
      'JP_FlightInfoService' => 'Juniper\Webservice\\JP_FlightInfoService',
      'JP_CruiseElement' => 'Juniper\Webservice\\JP_CruiseElement',
      'JP_CruiseBookingInfo' => 'Juniper\Webservice\\JP_CruiseBookingInfo',
      'JP_TransferElement' => 'Juniper\Webservice\\JP_TransferElement',
      'JP_ServiceElement' => 'Juniper\Webservice\\JP_ServiceElement',
      'JP_VisaElement' => 'Juniper\Webservice\\JP_VisaElement',
      'JP_TicketElement' => 'Juniper\Webservice\\JP_TicketElement',
      'JP_TransferByHotelElement' => 'Juniper\Webservice\\JP_TransferByHotelElement',
      'JP_RentacarElement' => 'Juniper\Webservice\\JP_RentacarElement',
      'JP_InsuranceElement' => 'Juniper\Webservice\\JP_InsuranceElement',
      'JP_HotelBookingInfo' => 'Juniper\Webservice\\JP_HotelBookingInfo',
      'ArrayOfJP_HotelPreference' => 'Juniper\Webservice\\ArrayOfJP_HotelPreference',
      'JP_HotelPreference' => 'Juniper\Webservice\\JP_HotelPreference',
      'JP_HotelBookingAdvancedOptions' => 'Juniper\Webservice\\JP_HotelBookingAdvancedOptions',
      'JP_BookingAdvancedOptions' => 'Juniper\Webservice\\JP_BookingAdvancedOptions',
      'JP_BaseAdvancedOptions' => 'Juniper\Webservice\\JP_BaseAdvancedOptions',
      'JP_AvailAdvancedOptions' => 'Juniper\Webservice\\JP_AvailAdvancedOptions',
      'JP_RentacarAvailAdvancedOptions' => 'Juniper\Webservice\\JP_RentacarAvailAdvancedOptions',
      'JP_HotelAvailAdvancedOptions' => 'Juniper\Webservice\\JP_HotelAvailAdvancedOptions',
      'JP_PackageAvailAdvancedOptions' => 'Juniper\Webservice\\JP_PackageAvailAdvancedOptions',
      'JP_FlightAvailAdvancedOptions' => 'Juniper\Webservice\\JP_FlightAvailAdvancedOptions',
      'JP_InsuranceAvailAdvancedOptions' => 'Juniper\Webservice\\JP_InsuranceAvailAdvancedOptions',
      'JP_ServicesAvailAdvancedOptions' => 'Juniper\Webservice\\JP_ServicesAvailAdvancedOptions',
      'JP_CruiseAvailAdvancedOptions' => 'Juniper\Webservice\\JP_CruiseAvailAdvancedOptions',
      'JP_BookingRulesAdvancedOptions' => 'Juniper\Webservice\\JP_BookingRulesAdvancedOptions',
      'JP_RentacarBookingRulesAdvancedOptions' => 'Juniper\Webservice\\JP_RentacarBookingRulesAdvancedOptions',
      'JP_HotelBookingRulesAdvancedOptions' => 'Juniper\Webservice\\JP_HotelBookingRulesAdvancedOptions',
      'JP_PackageBookingRulesAdvancedOptions' => 'Juniper\Webservice\\JP_PackageBookingRulesAdvancedOptions',
      'JP_FlightBookingRulesAdvancedOptions' => 'Juniper\Webservice\\JP_FlightBookingRulesAdvancedOptions',
      'JP_InsuranceBookingRulesAdvancedOptions' => 'Juniper\Webservice\\JP_InsuranceBookingRulesAdvancedOptions',
      'JP_ServicesBookingRulesAdvancedOptions' => 'Juniper\Webservice\\JP_ServicesBookingRulesAdvancedOptions',
      'JP_CruiseBookingRulesAdvancedOptions' => 'Juniper\Webservice\\JP_CruiseBookingRulesAdvancedOptions',
      'JP_CheckAvailAdvancedOptions' => 'Juniper\Webservice\\JP_CheckAvailAdvancedOptions',
      'JP_RentacarCheckAvailAdvancedOptions' => 'Juniper\Webservice\\JP_RentacarCheckAvailAdvancedOptions',
      'JP_HotelCheckAvailAdvancedOptions' => 'Juniper\Webservice\\JP_HotelCheckAvailAdvancedOptions',
      'JP_PackageCheckAvailAdvancedOptions' => 'Juniper\Webservice\\JP_PackageCheckAvailAdvancedOptions',
      'JP_FlightCheckAvailAdvancedOptions' => 'Juniper\Webservice\\JP_FlightCheckAvailAdvancedOptions',
      'JP_InsuranceCheckAvailAdvancedOptions' => 'Juniper\Webservice\\JP_InsuranceCheckAvailAdvancedOptions',
      'JP_ServicesCheckAvailAdvancedOptions' => 'Juniper\Webservice\\JP_ServicesCheckAvailAdvancedOptions',
      'JP_CruiseCheckAvailAdvancedOptions' => 'Juniper\Webservice\\JP_CruiseCheckAvailAdvancedOptions',
      'JP_CancelAdvancedOptions' => 'Juniper\Webservice\\JP_CancelAdvancedOptions',
      'JP_ReadAdvancedOptions' => 'Juniper\Webservice\\JP_ReadAdvancedOptions',
      'JP_ModifyAdvancedOptions' => 'Juniper\Webservice\\JP_ModifyAdvancedOptions',
      'JP_HotelModifyAdvancedOptions' => 'Juniper\Webservice\\JP_HotelModifyAdvancedOptions',
      'JP_BookingListAdvancedOptions' => 'Juniper\Webservice\\JP_BookingListAdvancedOptions',
      'JP_RentacarBookingAdvancedOptions' => 'Juniper\Webservice\\JP_RentacarBookingAdvancedOptions',
      'JP_PackageBookingAdvancedOptions' => 'Juniper\Webservice\\JP_PackageBookingAdvancedOptions',
      'JP_FlightBookingAdvancedOptions' => 'Juniper\Webservice\\JP_FlightBookingAdvancedOptions',
      'JP_InsuranceBookingAdvancedOptions' => 'Juniper\Webservice\\JP_InsuranceBookingAdvancedOptions',
      'JP_ServicesBookingAdvancedOptions' => 'Juniper\Webservice\\JP_ServicesBookingAdvancedOptions',
      'JP_CruiseBookingAdvancedOptions' => 'Juniper\Webservice\\JP_CruiseBookingAdvancedOptions',
      'HotelBookingResponse' => 'Juniper\Webservice\\HotelBookingResponse',
      'JP_BookingRS' => 'Juniper\Webservice\\JP_BookingRS',
      'ArrayOfJP_Reservation' => 'Juniper\Webservice\\ArrayOfJP_Reservation',
      'JP_Reservation' => 'Juniper\Webservice\\JP_Reservation',
      'ArrayOfJP_AgencyData' => 'Juniper\Webservice\\ArrayOfJP_AgencyData',
      'JP_AgencyData' => 'Juniper\Webservice\\JP_AgencyData',
      'JP_Items' => 'Juniper\Webservice\\JP_Items',
      'JP_FlightItem' => 'Juniper\Webservice\\JP_FlightItem',
      'JP_BaseItem' => 'Juniper\Webservice\\JP_BaseItem',
      'JP_ExternalInfo' => 'Juniper\Webservice\\JP_ExternalInfo',
      'JP_Supplier' => 'Juniper\Webservice\\JP_Supplier',
      'JP_CancellationPolicyRules' => 'Juniper\Webservice\\JP_CancellationPolicyRules',
      'JP_FirstDayCostCancellation' => 'Juniper\Webservice\\JP_FirstDayCostCancellation',
      'ArrayOfJP_Rule' => 'Juniper\Webservice\\ArrayOfJP_Rule',
      'JP_Rule' => 'Juniper\Webservice\\JP_Rule',
      'JP_RentacarItem' => 'Juniper\Webservice\\JP_RentacarItem',
      'JP_RentacarInfo' => 'Juniper\Webservice\\JP_RentacarInfo',
      'JP_RentacarAdditionalElements' => 'Juniper\Webservice\\JP_RentacarAdditionalElements',
      'ArrayOfJP_CarSupplement' => 'Juniper\Webservice\\ArrayOfJP_CarSupplement',
      'JP_CarSupplement' => 'Juniper\Webservice\\JP_CarSupplement',
      'ArrayOfJP_CarFee' => 'Juniper\Webservice\\ArrayOfJP_CarFee',
      'JP_CarFee' => 'Juniper\Webservice\\JP_CarFee',
      'JP_RentacarBookLocationDetails' => 'Juniper\Webservice\\JP_RentacarBookLocationDetails',
      'JP_RentacarLocationDetail' => 'Juniper\Webservice\\JP_RentacarLocationDetail',
      'JP_Zone' => 'Juniper\Webservice\\JP_Zone',
      'JP_OperationSchedule' => 'Juniper\Webservice\\JP_OperationSchedule',
      'ArrayOfJP_OperationTime' => 'Juniper\Webservice\\ArrayOfJP_OperationTime',
      'JP_OperationTime' => 'Juniper\Webservice\\JP_OperationTime',
      'ArrayOfJP_Hour' => 'Juniper\Webservice\\ArrayOfJP_Hour',
      'JP_Hour' => 'Juniper\Webservice\\JP_Hour',
      'JP_PackageItem' => 'Juniper\Webservice\\JP_PackageItem',
      'JP_PackageInfo' => 'Juniper\Webservice\\JP_PackageInfo',
      'ArrayOfString1' => 'Juniper\Webservice\\ArrayOfString1',
      'ArrayOfJP_PackageStay' => 'Juniper\Webservice\\ArrayOfJP_PackageStay',
      'JP_PackageStay' => 'Juniper\Webservice\\JP_PackageStay',
      'ArrayOfJP_PackageHotel' => 'Juniper\Webservice\\ArrayOfJP_PackageHotel',
      'JP_PackageHotel' => 'Juniper\Webservice\\JP_PackageHotel',
      'JP_HotelInfo' => 'Juniper\Webservice\\JP_HotelInfo',
      'JP_HotelChain' => 'Juniper\Webservice\\JP_HotelChain',
      'JP_HotelCategory' => 'Juniper\Webservice\\JP_HotelCategory',
      'JP_HotelType' => 'Juniper\Webservice\\JP_HotelType',
      'JP_PropertyType' => 'Juniper\Webservice\\JP_PropertyType',
      'JP_LabelType' => 'Juniper\Webservice\\JP_LabelType',
      'ArrayOfJP_ContentProvider' => 'Juniper\Webservice\\ArrayOfJP_ContentProvider',
      'JP_ContentProvider' => 'Juniper\Webservice\\JP_ContentProvider',
      'ArrayOfJP_ImageLong' => 'Juniper\Webservice\\ArrayOfJP_ImageLong',
      'JP_ImageLong' => 'Juniper\Webservice\\JP_ImageLong',
      'ArrayOfJP_MultimediaContent' => 'Juniper\Webservice\\ArrayOfJP_MultimediaContent',
      'JP_MultimediaContent' => 'Juniper\Webservice\\JP_MultimediaContent',
      'ArrayOfJP_HotelOption' => 'Juniper\Webservice\\ArrayOfJP_HotelOption',
      'JP_HotelOption' => 'Juniper\Webservice\\JP_HotelOption',
      'JP_Board' => 'Juniper\Webservice\\JP_Board',
      'ArrayOfJP_HotelRoom' => 'Juniper\Webservice\\ArrayOfJP_HotelRoom',
      'JP_HotelRoom' => 'Juniper\Webservice\\JP_HotelRoom',
      'JP_RoomOccupancy' => 'Juniper\Webservice\\JP_RoomOccupancy',
      'JP_HotelRoomSize' => 'Juniper\Webservice\\JP_HotelRoomSize',
      'JP_HotelAdditionalElements' => 'Juniper\Webservice\\JP_HotelAdditionalElements',
      'ArrayOfJP_HotelAdditionalElement' => 'Juniper\Webservice\\ArrayOfJP_HotelAdditionalElement',
      'JP_HotelAdditionalElement' => 'Juniper\Webservice\\JP_HotelAdditionalElement',
      'ArrayOfJP_HotelAdditionalElement1' => 'Juniper\Webservice\\ArrayOfJP_HotelAdditionalElement1',
      'ArrayOfJP_Flight' => 'Juniper\Webservice\\ArrayOfJP_Flight',
      'JP_Flight' => 'Juniper\Webservice\\JP_Flight',
      'JP_Routes' => 'Juniper\Webservice\\JP_Routes',
      'JP_Route' => 'Juniper\Webservice\\JP_Route',
      'ArrayOfJP_FlightSegment' => 'Juniper\Webservice\\ArrayOfJP_FlightSegment',
      'JP_FlightSegment' => 'Juniper\Webservice\\JP_FlightSegment',
      'ArrayOfJP_Equipment' => 'Juniper\Webservice\\ArrayOfJP_Equipment',
      'JP_Equipment' => 'Juniper\Webservice\\JP_Equipment',
      'ArrayOfJP_TechnicalStop' => 'Juniper\Webservice\\ArrayOfJP_TechnicalStop',
      'JP_TechnicalStop' => 'Juniper\Webservice\\JP_TechnicalStop',
      'JP_SeatingMap' => 'Juniper\Webservice\\JP_SeatingMap',
      'ArrayOfJP_SeatEquipment' => 'Juniper\Webservice\\ArrayOfJP_SeatEquipment',
      'JP_SeatEquipment' => 'Juniper\Webservice\\JP_SeatEquipment',
      'ArrayOfJP_Compartment' => 'Juniper\Webservice\\ArrayOfJP_Compartment',
      'JP_Compartment' => 'Juniper\Webservice\\JP_Compartment',
      'ArrayOfJP_Seat' => 'Juniper\Webservice\\ArrayOfJP_Seat',
      'JP_Seat' => 'Juniper\Webservice\\JP_Seat',
      'ArrayOfJP_GroupFee' => 'Juniper\Webservice\\ArrayOfJP_GroupFee',
      'JP_GroupFee' => 'Juniper\Webservice\\JP_GroupFee',
      'JP_AdditionalElements' => 'Juniper\Webservice\\JP_AdditionalElements',
      'ArrayOfString2' => 'Juniper\Webservice\\ArrayOfString2',
      'ArrayOfJP_Bag' => 'Juniper\Webservice\\ArrayOfJP_Bag',
      'JP_Bag' => 'Juniper\Webservice\\JP_Bag',
      'ArrayOfJP_ExtendedRelPaxBag' => 'Juniper\Webservice\\ArrayOfJP_ExtendedRelPaxBag',
      'JP_CreditCardFee' => 'Juniper\Webservice\\JP_CreditCardFee',
      'ArrayOfJP_FlightSupplement' => 'Juniper\Webservice\\ArrayOfJP_FlightSupplement',
      'JP_FlightSupplement' => 'Juniper\Webservice\\JP_FlightSupplement',
      'ArrayOfJP_ExtendedRelPax' => 'Juniper\Webservice\\ArrayOfJP_ExtendedRelPax',
      'ArrayOfJP_FlightRule' => 'Juniper\Webservice\\ArrayOfJP_FlightRule',
      'JP_FlightRule' => 'Juniper\Webservice\\JP_FlightRule',
      'ArrayOfJP_Transfer' => 'Juniper\Webservice\\ArrayOfJP_Transfer',
      'JP_Transfer' => 'Juniper\Webservice\\JP_Transfer',
      'JP_TransferInfo' => 'Juniper\Webservice\\JP_TransferInfo',
      'ArrayOfJP_TransferOption' => 'Juniper\Webservice\\ArrayOfJP_TransferOption',
      'JP_TransferOption' => 'Juniper\Webservice\\JP_TransferOption',
      'ArrayOfJP_ServiceDate' => 'Juniper\Webservice\\ArrayOfJP_ServiceDate',
      'JP_ServiceDate' => 'Juniper\Webservice\\JP_ServiceDate',
      'ArrayOfJP_ServiceContract' => 'Juniper\Webservice\\ArrayOfJP_ServiceContract',
      'JP_ServiceContract' => 'Juniper\Webservice\\JP_ServiceContract',
      'JP_Contract' => 'Juniper\Webservice\\JP_Contract',
      'JP_HotelContractType' => 'Juniper\Webservice\\JP_HotelContractType',
      'JP_HotelDailyContract' => 'Juniper\Webservice\\JP_HotelDailyContract',
      'JP_DailyHotelContract' => 'Juniper\Webservice\\JP_DailyHotelContract',
      'ArrayOfJP_Origin' => 'Juniper\Webservice\\ArrayOfJP_Origin',
      'JP_Origin' => 'Juniper\Webservice\\JP_Origin',
      'ArrayOfJP_Destination' => 'Juniper\Webservice\\ArrayOfJP_Destination',
      'JP_Destination' => 'Juniper\Webservice\\JP_Destination',
      'ArrayOfJP_ServiceProduct' => 'Juniper\Webservice\\ArrayOfJP_ServiceProduct',
      'JP_ServiceProduct' => 'Juniper\Webservice\\JP_ServiceProduct',
      'JP_ServiceInfo' => 'Juniper\Webservice\\JP_ServiceInfo',
      'ArrayOfJP_ServiceOption' => 'Juniper\Webservice\\ArrayOfJP_ServiceOption',
      'JP_ServiceOption' => 'Juniper\Webservice\\JP_ServiceOption',
      'ArrayOfJP_MeetingPoint' => 'Juniper\Webservice\\ArrayOfJP_MeetingPoint',
      'JP_MeetingPoint' => 'Juniper\Webservice\\JP_MeetingPoint',
      'ArrayOfJP_PackageInsurance' => 'Juniper\Webservice\\ArrayOfJP_PackageInsurance',
      'JP_PackageInsurance' => 'Juniper\Webservice\\JP_PackageInsurance',
      'JP_InsuranceInfo' => 'Juniper\Webservice\\JP_InsuranceInfo',
      'ArrayOfJP_Description' => 'Juniper\Webservice\\ArrayOfJP_Description',
      'JP_Description' => 'Juniper\Webservice\\JP_Description',
      'ArrayOfJP_Coverage' => 'Juniper\Webservice\\ArrayOfJP_Coverage',
      'JP_Coverage' => 'Juniper\Webservice\\JP_Coverage',
      'JP_EmergencyContact' => 'Juniper\Webservice\\JP_EmergencyContact',
      'ArrayOfJP_Tour' => 'Juniper\Webservice\\ArrayOfJP_Tour',
      'JP_Tour' => 'Juniper\Webservice\\JP_Tour',
      'ArrayOfJP_Car' => 'Juniper\Webservice\\ArrayOfJP_Car',
      'JP_Car' => 'Juniper\Webservice\\JP_Car',
      'JP_PackageAdditionalElements' => 'Juniper\Webservice\\JP_PackageAdditionalElements',
      'ArrayOfJP_PackageAdditionalElement' => 'Juniper\Webservice\\ArrayOfJP_PackageAdditionalElement',
      'JP_PackageAdditionalElement' => 'Juniper\Webservice\\JP_PackageAdditionalElement',
      'ArrayOfJP_PackageInfoAFIPAmount' => 'Juniper\Webservice\\ArrayOfJP_PackageInfoAFIPAmount',
      'JP_PackageInfoAFIPAmount' => 'Juniper\Webservice\\JP_PackageInfoAFIPAmount',
      'JP_HotelItem' => 'Juniper\Webservice\\JP_HotelItem',
      'JP_ItemHotelInfo' => 'Juniper\Webservice\\JP_ItemHotelInfo',
      'ArrayOfJP_ItemHotelRoom' => 'Juniper\Webservice\\ArrayOfJP_ItemHotelRoom',
      'JP_ItemHotelRoom' => 'Juniper\Webservice\\JP_ItemHotelRoom',
      'ArrayOfJP_HotelDailyContracts' => 'Juniper\Webservice\\ArrayOfJP_HotelDailyContracts',
      'JP_HotelDailyContracts' => 'Juniper\Webservice\\JP_HotelDailyContracts',
      'JP_InsuranceItem' => 'Juniper\Webservice\\JP_InsuranceItem',
      'JP_CruiseItem' => 'Juniper\Webservice\\JP_CruiseItem',
      'JP_CruiseResult' => 'Juniper\Webservice\\JP_CruiseResult',
      'JP_Ship' => 'Juniper\Webservice\\JP_Ship',
      'JP_Shipping' => 'Juniper\Webservice\\JP_Shipping',
      'JP_CruiseList' => 'Juniper\Webservice\\JP_CruiseList',
      'JP_Overview' => 'Juniper\Webservice\\JP_Overview',
      'JP_CruiseServices' => 'Juniper\Webservice\\JP_CruiseServices',
      'JP_CruiseSportServices' => 'Juniper\Webservice\\JP_CruiseSportServices',
      'JP_CruiseChildServices' => 'Juniper\Webservice\\JP_CruiseChildServices',
      'JP_CruiseCabinServices' => 'Juniper\Webservice\\JP_CruiseCabinServices',
      'JP_CruiseItinerary' => 'Juniper\Webservice\\JP_CruiseItinerary',
      'ArrayOfJP_CruiseStarDay' => 'Juniper\Webservice\\ArrayOfJP_CruiseStarDay',
      'JP_CruiseStarDay' => 'Juniper\Webservice\\JP_CruiseStarDay',
      'ArrayOfJP_Day' => 'Juniper\Webservice\\ArrayOfJP_Day',
      'JP_Day' => 'Juniper\Webservice\\JP_Day',
      'JP_Harbor' => 'Juniper\Webservice\\JP_Harbor',
      'ArrayOfJP_CruiseCategory' => 'Juniper\Webservice\\ArrayOfJP_CruiseCategory',
      'JP_CruiseCategory' => 'Juniper\Webservice\\JP_CruiseCategory',
      'JP_CruiseAdditionalElements' => 'Juniper\Webservice\\JP_CruiseAdditionalElements',
      'ArrayOfJP_CruiseComponent' => 'Juniper\Webservice\\ArrayOfJP_CruiseComponent',
      'JP_CruiseComponent' => 'Juniper\Webservice\\JP_CruiseComponent',
      'ArrayOfJP_CruiseStation' => 'Juniper\Webservice\\ArrayOfJP_CruiseStation',
      'JP_CruiseStation' => 'Juniper\Webservice\\JP_CruiseStation',
      'ArrayOfJP_CruiseFlight' => 'Juniper\Webservice\\ArrayOfJP_CruiseFlight',
      'JP_CruiseFlight' => 'Juniper\Webservice\\JP_CruiseFlight',
      'ArrayOfJP_CruiseFlightRoute' => 'Juniper\Webservice\\ArrayOfJP_CruiseFlightRoute',
      'JP_CruiseFlightRoute' => 'Juniper\Webservice\\JP_CruiseFlightRoute',
      'ArrayOfJP_CruiseSegment' => 'Juniper\Webservice\\ArrayOfJP_CruiseSegment',
      'JP_CruiseSegment' => 'Juniper\Webservice\\JP_CruiseSegment',
      'ArrayOfJP_CruisePromotion' => 'Juniper\Webservice\\ArrayOfJP_CruisePromotion',
      'JP_CruisePromotion' => 'Juniper\Webservice\\JP_CruisePromotion',
      'ArrayOfJP_CruiseSupplement' => 'Juniper\Webservice\\ArrayOfJP_CruiseSupplement',
      'JP_CruiseSupplement' => 'Juniper\Webservice\\JP_CruiseSupplement',
      'ArrayOfJP_CruiseExtendedRelPax' => 'Juniper\Webservice\\ArrayOfJP_CruiseExtendedRelPax',
      'ArrayOfJP_CruiseCabin' => 'Juniper\Webservice\\ArrayOfJP_CruiseCabin',
      'JP_CruiseCabin' => 'Juniper\Webservice\\JP_CruiseCabin',
      'JP_CruiseDeck' => 'Juniper\Webservice\\JP_CruiseDeck',
      'JP_CruiseRequiredFields' => 'Juniper\Webservice\\JP_CruiseRequiredFields',
      'JP_CruiseBooking' => 'Juniper\Webservice\\JP_CruiseBooking',
      'JP_CruiseElements' => 'Juniper\Webservice\\JP_CruiseElements',
      'JP_CruisePriceInformation' => 'Juniper\Webservice\\JP_CruisePriceInformation',
      'JP_CruiseOptionalElements' => 'Juniper\Webservice\\JP_CruiseOptionalElements',
      'ArrayOfJP_ExtendedRelPaxDist' => 'Juniper\Webservice\\ArrayOfJP_ExtendedRelPaxDist',
      'JP_ExtendedRelPaxDist' => 'Juniper\Webservice\\JP_ExtendedRelPaxDist',
      'JP_TransferItem' => 'Juniper\Webservice\\JP_TransferItem',
      'JP_ServiceItem' => 'Juniper\Webservice\\JP_ServiceItem',
      'JP_VisaItem' => 'Juniper\Webservice\\JP_VisaItem',
      'JP_VisaInfo' => 'Juniper\Webservice\\JP_VisaInfo',
      'ArrayOfJP_VisaOption' => 'Juniper\Webservice\\ArrayOfJP_VisaOption',
      'JP_VisaOption' => 'Juniper\Webservice\\JP_VisaOption',
      'RentacarBooking' => 'Juniper\Webservice\\RentacarBooking',
      'JP_RentacarBooking' => 'Juniper\Webservice\\JP_RentacarBooking',
      'JP_RentacarElements' => 'Juniper\Webservice\\JP_RentacarElements',
      'RentacarBookingResponse' => 'Juniper\Webservice\\RentacarBookingResponse',
      'InsuranceBooking' => 'Juniper\Webservice\\InsuranceBooking',
      'JP_InsuranceBooking' => 'Juniper\Webservice\\JP_InsuranceBooking',
      'JP_InsuranceElements' => 'Juniper\Webservice\\JP_InsuranceElements',
      'InsuranceBookingResponse' => 'Juniper\Webservice\\InsuranceBookingResponse',
      'PackageBooking' => 'Juniper\Webservice\\PackageBooking',
      'JP_PackageBooking' => 'Juniper\Webservice\\JP_PackageBooking',
      'JP_PackageElements' => 'Juniper\Webservice\\JP_PackageElements',
      'PackageBookingResponse' => 'Juniper\Webservice\\PackageBookingResponse',
      'FlightBooking' => 'Juniper\Webservice\\FlightBooking',
      'JP_FlightBooking' => 'Juniper\Webservice\\JP_FlightBooking',
      'ArrayOfJP_FlightElement' => 'Juniper\Webservice\\ArrayOfJP_FlightElement',
      'FlightBookingResponse' => 'Juniper\Webservice\\FlightBookingResponse',
      'CruiseBooking' => 'Juniper\Webservice\\CruiseBooking',
      'CruiseBookingResponse' => 'Juniper\Webservice\\CruiseBookingResponse',
      'ServiceBooking' => 'Juniper\Webservice\\ServiceBooking',
      'JP_ServiceBooking' => 'Juniper\Webservice\\JP_ServiceBooking',
      'JP_ServiceElements' => 'Juniper\Webservice\\JP_ServiceElements',
      'ServiceBookingResponse' => 'Juniper\Webservice\\ServiceBookingResponse',
      'TransferBooking' => 'Juniper\Webservice\\TransferBooking',
      'JP_TransferBooking' => 'Juniper\Webservice\\JP_TransferBooking',
      'JP_TransferElements' => 'Juniper\Webservice\\JP_TransferElements',
      'TransferBookingResponse' => 'Juniper\Webservice\\TransferBookingResponse',
      'VisaBooking' => 'Juniper\Webservice\\VisaBooking',
      'JP_VisaBooking' => 'Juniper\Webservice\\JP_VisaBooking',
      'JP_VisaElements' => 'Juniper\Webservice\\JP_VisaElements',
      'VisaBookingResponse' => 'Juniper\Webservice\\VisaBookingResponse',
      'CancelBooking' => 'Juniper\Webservice\\CancelBooking',
      'JP_CancelRQ' => 'Juniper\Webservice\\JP_CancelRQ',
      'JP_CancelRequest' => 'Juniper\Webservice\\JP_CancelRequest',
      'CancelBookingResponse' => 'Juniper\Webservice\\CancelBookingResponse',
      'ReadBooking' => 'Juniper\Webservice\\ReadBooking',
      'JP_ReadRQ' => 'Juniper\Webservice\\JP_ReadRQ',
      'JP_ReadRequest' => 'Juniper\Webservice\\JP_ReadRequest',
      'ReadBookingResponse' => 'Juniper\Webservice\\ReadBookingResponse',
      'BookingList' => 'Juniper\Webservice\\BookingList',
      'JP_BookingListRQ' => 'Juniper\Webservice\\JP_BookingListRQ',
      'JP_BookingListRequest' => 'Juniper\Webservice\\JP_BookingListRequest',
      'StartingBookingDate' => 'Juniper\Webservice\\StartingBookingDate',
      'BookingDate' => 'Juniper\Webservice\\BookingDate',
      'BookingListResponse' => 'Juniper\Webservice\\BookingListResponse',
      'JP_BookingListRS' => 'Juniper\Webservice\\JP_BookingListRS',
      'ArrayOfJP_BookingListRSReservation' => 'Juniper\Webservice\\ArrayOfJP_BookingListRSReservation',
      'Reservation' => 'Juniper\Webservice\\Reservation',
      'FinalCustomerSave' => 'Juniper\Webservice\\FinalCustomerSave',
      'JP_FinalCustomerSave' => 'Juniper\Webservice\\JP_FinalCustomerSave',
      'JP_FinalCustomerData' => 'Juniper\Webservice\\JP_FinalCustomerData',
      'JP_FinalCustomerContactData' => 'Juniper\Webservice\\JP_FinalCustomerContactData',
      'JP_FinalCustomerContactAddressData' => 'Juniper\Webservice\\JP_FinalCustomerContactAddressData',
      'FinalCustomerSaveResponse' => 'Juniper\Webservice\\FinalCustomerSaveResponse',
      'JP_FinalCustomerSaveResult' => 'Juniper\Webservice\\JP_FinalCustomerSaveResult',
      'HotelModify' => 'Juniper\Webservice\\HotelModify',
      'JP_HotelModify' => 'Juniper\Webservice\\JP_HotelModify',
      'JP_ReservationLocationModify' => 'Juniper\Webservice\\JP_ReservationLocationModify',
      'JP_SearchSegmentHotelsModify' => 'Juniper\Webservice\\JP_SearchSegmentHotelsModify',
      'ArrayOfJP_HotelRelPaxDist' => 'Juniper\Webservice\\ArrayOfJP_HotelRelPaxDist',
      'HotelModifyResponse' => 'Juniper\Webservice\\HotelModifyResponse',
      'JP_ModifyRS' => 'Juniper\Webservice\\JP_ModifyRS',
      'JP_ModifyResults' => 'Juniper\Webservice\\JP_ModifyResults',
      'JP_HotelResultModify' => 'Juniper\Webservice\\JP_HotelResultModify',
      'ArrayOfJP_HotelOptionModify' => 'Juniper\Webservice\\ArrayOfJP_HotelOptionModify',
      'JP_HotelOptionModify' => 'Juniper\Webservice\\JP_HotelOptionModify',
      'HotelConfirmModify' => 'Juniper\Webservice\\HotelConfirmModify',
      'JP_HotelConfirmModify' => 'Juniper\Webservice\\JP_HotelConfirmModify',
      'JP_HotelConfirmElement' => 'Juniper\Webservice\\JP_HotelConfirmElement',
      'JP_BaseModifyElement' => 'Juniper\Webservice\\JP_BaseModifyElement',
      'HotelConfirmModifyResponse' => 'Juniper\Webservice\\HotelConfirmModifyResponse',
      'HotelAvail' => 'Juniper\Webservice\\HotelAvail',
      'JP_HotelAvail' => 'Juniper\Webservice\\JP_HotelAvail',
      'JP_RequestHotelsAvail' => 'Juniper\Webservice\\JP_RequestHotelsAvail',
      'JP_SearchSegmentsHotels' => 'Juniper\Webservice\\JP_SearchSegmentsHotels',
      'JP_SearchSegmentHotels' => 'Juniper\Webservice\\JP_SearchSegmentHotels',
      'JP_SearchSegmentBase' => 'Juniper\Webservice\\JP_SearchSegmentBase',
      'JP_SearchSegmentRentacar' => 'Juniper\Webservice\\JP_SearchSegmentRentacar',
      'JP_SearchSegmentPackages' => 'Juniper\Webservice\\JP_SearchSegmentPackages',
      'ArrayOfString4' => 'Juniper\Webservice\\ArrayOfString4',
      'ArrayOfJP_HotelCategory' => 'Juniper\Webservice\\ArrayOfJP_HotelCategory',
      'ArrayOfString3' => 'Juniper\Webservice\\ArrayOfString3',
      'JP_SearchSegmentInsurance' => 'Juniper\Webservice\\JP_SearchSegmentInsurance',
      'JP_SearchSegmentTransfers' => 'Juniper\Webservice\\JP_SearchSegmentTransfers',
      'JP_SearchSegmentTransfersByHotel' => 'Juniper\Webservice\\JP_SearchSegmentTransfersByHotel',
      'JP_SearchSegmentServices' => 'Juniper\Webservice\\JP_SearchSegmentServices',
      'JP_SearchSegmentVisa' => 'Juniper\Webservice\\JP_SearchSegmentVisa',
      'JP_SearchSegmentRentacarRules' => 'Juniper\Webservice\\JP_SearchSegmentRentacarRules',
      'ArrayOfString5' => 'Juniper\Webservice\\ArrayOfString5',
      'ArrayOfJP_HotelType' => 'Juniper\Webservice\\ArrayOfJP_HotelType',
      'ArrayOfJP_PropertyType' => 'Juniper\Webservice\\ArrayOfJP_PropertyType',
      'ArrayOfJP_Board' => 'Juniper\Webservice\\ArrayOfJP_Board',
      'ArrayOfJP_SupplementHotelType' => 'Juniper\Webservice\\ArrayOfJP_SupplementHotelType',
      'JP_SupplementHotelType' => 'Juniper\Webservice\\JP_SupplementHotelType',
      'ArrayOfString6' => 'Juniper\Webservice\\ArrayOfString6',
      'ArrayOfJP_DailyHotelContract' => 'Juniper\Webservice\\ArrayOfJP_DailyHotelContract',
      'JP_SearchSegmentsHotelFutureRates' => 'Juniper\Webservice\\JP_SearchSegmentsHotelFutureRates',
      'ArrayOfString7' => 'Juniper\Webservice\\ArrayOfString7',
      'HotelAvailResponse' => 'Juniper\Webservice\\HotelAvailResponse',
      'JP_AvailResponseRS' => 'Juniper\Webservice\\JP_AvailResponseRS',
      'JP_Results' => 'Juniper\Webservice\\JP_Results',
      'JP_HotelCalendarResult' => 'Juniper\Webservice\\JP_HotelCalendarResult',
      'ArrayOfJP_HotelResult' => 'Juniper\Webservice\\ArrayOfJP_HotelResult',
      'JP_HotelResult' => 'Juniper\Webservice\\JP_HotelResult',
      'JP_HotelFutureRatesResults' => 'Juniper\Webservice\\JP_HotelFutureRatesResults',
      'JP_HotelFutureRatesResult' => 'Juniper\Webservice\\JP_HotelFutureRatesResult',
      'JP_FutureRatesResultInfo' => 'Juniper\Webservice\\JP_FutureRatesResultInfo',
      'JP_WarningDetails' => 'Juniper\Webservice\\JP_WarningDetails',
      'ArrayOfJP_WarningDate' => 'Juniper\Webservice\\ArrayOfJP_WarningDate',
      'JP_WarningDate' => 'Juniper\Webservice\\JP_WarningDate',
      'ArrayOfJP_WarningDistribution' => 'Juniper\Webservice\\ArrayOfJP_WarningDistribution',
      'JP_WarningDistribution' => 'Juniper\Webservice\\JP_WarningDistribution',
      'JP_InsuranceResult' => 'Juniper\Webservice\\JP_InsuranceResult',
      'JP_PackageResult' => 'Juniper\Webservice\\JP_PackageResult',
      'JP_RentacarResult' => 'Juniper\Webservice\\JP_RentacarResult',
      'ArrayOfJP_RentacarOption' => 'Juniper\Webservice\\ArrayOfJP_RentacarOption',
      'JP_RentacarOption' => 'Juniper\Webservice\\JP_RentacarOption',
      'JP_RentacarSaleContract' => 'Juniper\Webservice\\JP_RentacarSaleContract',
      'JP_ServiceResult' => 'Juniper\Webservice\\JP_ServiceResult',
      'JP_TransferResult' => 'Juniper\Webservice\\JP_TransferResult',
      'JP_VisaResult' => 'Juniper\Webservice\\JP_VisaResult',
      'RentacarAvail' => 'Juniper\Webservice\\RentacarAvail',
      'JP_RentacarAvail' => 'Juniper\Webservice\\JP_RentacarAvail',
      'JP_RentacarRequest' => 'Juniper\Webservice\\JP_RentacarRequest',
      'JP_SearchSegmentsRentacar' => 'Juniper\Webservice\\JP_SearchSegmentsRentacar',
      'ArrayOfJP_RentacarSupplier' => 'Juniper\Webservice\\ArrayOfJP_RentacarSupplier',
      'JP_RentacarSupplier' => 'Juniper\Webservice\\JP_RentacarSupplier',
      'ArrayOfJP_RentacarContract' => 'Juniper\Webservice\\ArrayOfJP_RentacarContract',
      'JP_RentacarContract' => 'Juniper\Webservice\\JP_RentacarContract',
      'ArrayOfJP_RentacarLocation' => 'Juniper\Webservice\\ArrayOfJP_RentacarLocation',
      'JP_RentacarLocation' => 'Juniper\Webservice\\JP_RentacarLocation',
      'RentacarAvailResponse' => 'Juniper\Webservice\\RentacarAvailResponse',
      'HotelAvailCalendar' => 'Juniper\Webservice\\HotelAvailCalendar',
      'JP_HotelAvailCalendar' => 'Juniper\Webservice\\JP_HotelAvailCalendar',
      'HotelAvailCalendarResponse' => 'Juniper\Webservice\\HotelAvailCalendarResponse',
      'HotelFutureRates' => 'Juniper\Webservice\\HotelFutureRates',
      'JP_HotelFutureRates' => 'Juniper\Webservice\\JP_HotelFutureRates',
      'JP_RequestFutureRatesAvail' => 'Juniper\Webservice\\JP_RequestFutureRatesAvail',
      'HotelFutureRatesResponse' => 'Juniper\Webservice\\HotelFutureRatesResponse',
      'PackageAvail' => 'Juniper\Webservice\\PackageAvail',
      'JP_PackageAvailabilityRQ' => 'Juniper\Webservice\\JP_PackageAvailabilityRQ',
      'JP_PackageRequest' => 'Juniper\Webservice\\JP_PackageRequest',
      'JP_SearchSegmentsPackages' => 'Juniper\Webservice\\JP_SearchSegmentsPackages',
      'PackageAvailResponse' => 'Juniper\Webservice\\PackageAvailResponse',
      'PackageChangeProduct' => 'Juniper\Webservice\\PackageChangeProduct',
      'JP_PackageChangeProductRQ' => 'Juniper\Webservice\\JP_PackageChangeProductRQ',
      'JP_PackageChangeProductRequest' => 'Juniper\Webservice\\JP_PackageChangeProductRequest',
      'JP_PackageOptionChangeProduct' => 'Juniper\Webservice\\JP_PackageOptionChangeProduct',
      'JP_PackageOptionRQ' => 'Juniper\Webservice\\JP_PackageOptionRQ',
      'PackageChangeProductResponse' => 'Juniper\Webservice\\PackageChangeProductResponse',
      'FlightAvail' => 'Juniper\Webservice\\FlightAvail',
      'JP_FlightAvail' => 'Juniper\Webservice\\JP_FlightAvail',
      'JP_FlightRequest' => 'Juniper\Webservice\\JP_FlightRequest',
      'JP_SearchSegmentsFlight' => 'Juniper\Webservice\\JP_SearchSegmentsFlight',
      'JP_SearchSegmentFlight' => 'Juniper\Webservice\\JP_SearchSegmentFlight',
      'ArrayOfJP_RouteDispo' => 'Juniper\Webservice\\ArrayOfJP_RouteDispo',
      'JP_RouteDispo' => 'Juniper\Webservice\\JP_RouteDispo',
      'JP_FlightDiscount' => 'Juniper\Webservice\\JP_FlightDiscount',
      'ArrayOfJP_Airline' => 'Juniper\Webservice\\ArrayOfJP_Airline',
      'JP_Airline' => 'Juniper\Webservice\\JP_Airline',
      'ArrayOfJP_FlightSupplier' => 'Juniper\Webservice\\ArrayOfJP_FlightSupplier',
      'JP_FlightSupplier' => 'Juniper\Webservice\\JP_FlightSupplier',
      'ArrayOfJP_FlightRate' => 'Juniper\Webservice\\ArrayOfJP_FlightRate',
      'JP_FlightRate' => 'Juniper\Webservice\\JP_FlightRate',
      'FlightAvailResponse' => 'Juniper\Webservice\\FlightAvailResponse',
      'CruisePreAvail' => 'Juniper\Webservice\\CruisePreAvail',
      'JP_CruisePreAvail' => 'Juniper\Webservice\\JP_CruisePreAvail',
      'JP_CruisePreRequest' => 'Juniper\Webservice\\JP_CruisePreRequest',
      'JP_SearchPreSegmentsCruise' => 'Juniper\Webservice\\JP_SearchPreSegmentsCruise',
      'JP_SearchPreSegmentCruise' => 'Juniper\Webservice\\JP_SearchPreSegmentCruise',
      'ArrayOfJP_CruiseSupplier' => 'Juniper\Webservice\\ArrayOfJP_CruiseSupplier',
      'JP_CruiseSupplier' => 'Juniper\Webservice\\JP_CruiseSupplier',
      'CruisePreAvailResponse' => 'Juniper\Webservice\\CruisePreAvailResponse',
      'CruiseAvail' => 'Juniper\Webservice\\CruiseAvail',
      'JP_CruiseAvail' => 'Juniper\Webservice\\JP_CruiseAvail',
      'JP_CruiseRequest' => 'Juniper\Webservice\\JP_CruiseRequest',
      'JP_CruiseSearch' => 'Juniper\Webservice\\JP_CruiseSearch',
      'JP_SearchSegmentsCruise' => 'Juniper\Webservice\\JP_SearchSegmentsCruise',
      'JP_SearchSegmentCruise' => 'Juniper\Webservice\\JP_SearchSegmentCruise',
      'CruiseAvailResponse' => 'Juniper\Webservice\\CruiseAvailResponse',
      'InsuranceAvail' => 'Juniper\Webservice\\InsuranceAvail',
      'JP_InsuranceAvail' => 'Juniper\Webservice\\JP_InsuranceAvail',
      'JP_RequestInsurancesAvail' => 'Juniper\Webservice\\JP_RequestInsurancesAvail',
      'JP_SearchSegmentsInsurance' => 'Juniper\Webservice\\JP_SearchSegmentsInsurance',
      'ArrayOfJP_ProductType' => 'Juniper\Webservice\\ArrayOfJP_ProductType',
      'ArrayOfJP_InsuranceRelPaxDist' => 'Juniper\Webservice\\ArrayOfJP_InsuranceRelPaxDist',
      'InsuranceAvailResponse' => 'Juniper\Webservice\\InsuranceAvailResponse',
      'ServiceAvail' => 'Juniper\Webservice\\ServiceAvail',
      'JP_ServiceAvailabilityRQ' => 'Juniper\Webservice\\JP_ServiceAvailabilityRQ',
      'JP_ServiceRequest' => 'Juniper\Webservice\\JP_ServiceRequest',
      'JP_SearchSegmentsServices' => 'Juniper\Webservice\\JP_SearchSegmentsServices',
      'ServiceAvailResponse' => 'Juniper\Webservice\\ServiceAvailResponse',
      'TransferAvail' => 'Juniper\Webservice\\TransferAvail',
      'JP_TransferAvailabilityRQ' => 'Juniper\Webservice\\JP_TransferAvailabilityRQ',
      'JP_TransferRequest' => 'Juniper\Webservice\\JP_TransferRequest',
      'JP_SearchSegmentsTransfers' => 'Juniper\Webservice\\JP_SearchSegmentsTransfers',
      'TransferAvailResponse' => 'Juniper\Webservice\\TransferAvailResponse',
      'TransferAvailByHotel' => 'Juniper\Webservice\\TransferAvailByHotel',
      'JP_TransferAvailabilityRQByHotel' => 'Juniper\Webservice\\JP_TransferAvailabilityRQByHotel',
      'JP_TransferRequestByHotel' => 'Juniper\Webservice\\JP_TransferRequestByHotel',
      'JP_SearchSegmentsTransfersByHotel' => 'Juniper\Webservice\\JP_SearchSegmentsTransfersByHotel',
      'TransferAvailByHotelResponse' => 'Juniper\Webservice\\TransferAvailByHotelResponse',
      'VisaAvail' => 'Juniper\Webservice\\VisaAvail',
      'JP_VisaAvailabilityRQ' => 'Juniper\Webservice\\JP_VisaAvailabilityRQ',
      'JP_VisaRequest' => 'Juniper\Webservice\\JP_VisaRequest',
      'JP_SearchSegmentsVisa' => 'Juniper\Webservice\\JP_SearchSegmentsVisa',
      'VisaAvailResponse' => 'Juniper\Webservice\\VisaAvailResponse',
      'HotelAllotment' => 'Juniper\Webservice\\HotelAllotment',
      'JP_HotelAllotmentRQ' => 'Juniper\Webservice\\JP_HotelAllotmentRQ',
      'JP_HotelAllotmentRequest' => 'Juniper\Webservice\\JP_HotelAllotmentRequest',
      'ArrayOfJP_HotelInventoryCode' => 'Juniper\Webservice\\ArrayOfJP_HotelInventoryCode',
      'JP_HotelInventoryCode' => 'Juniper\Webservice\\JP_HotelInventoryCode',
      'JP_InventoryRS' => 'Juniper\Webservice\\JP_InventoryRS',
      'JP_Inventory' => 'Juniper\Webservice\\JP_Inventory',
      'JP_HotelAllotmentRS' => 'Juniper\Webservice\\JP_HotelAllotmentRS',
      'JPSOAP_HotelAvailContract' => 'Juniper\Webservice\\JPSOAP_HotelAvailContract',
      'JPSOAP_Contract' => 'Juniper\Webservice\\JPSOAP_Contract',
      'JPSOAP_HotelRatePlanContract' => 'Juniper\Webservice\\JPSOAP_HotelRatePlanContract',
      'JPSOAP_Ages' => 'Juniper\Webservice\\JPSOAP_Ages',
      'JPSOAP_ContractRestrictions' => 'Juniper\Webservice\\JPSOAP_ContractRestrictions',
      'JPSOAP_RequiredOptionalSupplements' => 'Juniper\Webservice\\JPSOAP_RequiredOptionalSupplements',
      'ArrayOfJPSOAP_IntCodeAttr' => 'Juniper\Webservice\\ArrayOfJPSOAP_IntCodeAttr',
      'JPSOAP_IntCodeAttr' => 'Juniper\Webservice\\JPSOAP_IntCodeAttr',
      'ArrayOfJPSOAP_IntCodeAttr1' => 'Juniper\Webservice\\ArrayOfJPSOAP_IntCodeAttr1',
      'JPSOAP_CountryOfResidence' => 'Juniper\Webservice\\JPSOAP_CountryOfResidence',
      'ArrayOfJPSOAP_hotelRatePlanRate' => 'Juniper\Webservice\\ArrayOfJPSOAP_hotelRatePlanRate',
      'JPSOAP_hotelRatePlanRate' => 'Juniper\Webservice\\JPSOAP_hotelRatePlanRate',
      'ArrayOfJPSOAP_DateIntervals' => 'Juniper\Webservice\\ArrayOfJPSOAP_DateIntervals',
      'JPSOAP_DateIntervals' => 'Juniper\Webservice\\JPSOAP_DateIntervals',
      'JPSOAP_LengthOfStay' => 'Juniper\Webservice\\JPSOAP_LengthOfStay',
      'JPSOAP_RateDiscounts' => 'Juniper\Webservice\\JPSOAP_RateDiscounts',
      'ArrayOfJPSOAP_Discount' => 'Juniper\Webservice\\ArrayOfJPSOAP_Discount',
      'JPSOAP_Discount' => 'Juniper\Webservice\\JPSOAP_Discount',
      'ArrayOfJPSOAP_Discount1' => 'Juniper\Webservice\\ArrayOfJPSOAP_Discount1',
      'ArrayOfJPSOAP_Discount2' => 'Juniper\Webservice\\ArrayOfJPSOAP_Discount2',
      'ArrayOfJPSOAP_RatePrice' => 'Juniper\Webservice\\ArrayOfJPSOAP_RatePrice',
      'JPSOAP_RatePrice' => 'Juniper\Webservice\\JPSOAP_RatePrice',
      'JPSOAP_Price' => 'Juniper\Webservice\\JPSOAP_Price',
      'JPSOAP_OrderedPrice' => 'Juniper\Webservice\\JPSOAP_OrderedPrice',
      'JPSOAP_OrderedTypedPrice' => 'Juniper\Webservice\\JPSOAP_OrderedTypedPrice',
      'JPSOAP_PriceTyped' => 'Juniper\Webservice\\JPSOAP_PriceTyped',
      'ArrayOfJPSOAP_OrderedPrice' => 'Juniper\Webservice\\ArrayOfJPSOAP_OrderedPrice',
      'ArrayOfJPSOAP_OrderedPrice1' => 'Juniper\Webservice\\ArrayOfJPSOAP_OrderedPrice1',
      'ArrayOfJPSOAP_OrderedPrice2' => 'Juniper\Webservice\\ArrayOfJPSOAP_OrderedPrice2',
      'ArrayOfJPSOAP_hotelRatePlanTax' => 'Juniper\Webservice\\ArrayOfJPSOAP_hotelRatePlanTax',
      'JPSOAP_hotelRatePlanTax' => 'Juniper\Webservice\\JPSOAP_hotelRatePlanTax',
      'ArrayOfJPSOAP_hotelRatePlanCancellationPolicy' => 'Juniper\Webservice\\ArrayOfJPSOAP_hotelRatePlanCancellationPolicy',
      'JPSOAP_hotelRatePlanCancellationPolicy' => 'Juniper\Webservice\\JPSOAP_hotelRatePlanCancellationPolicy',
      'JPSOAP_DateIntervalsGroupsStayDates' => 'Juniper\Webservice\\JPSOAP_DateIntervalsGroupsStayDates',
      'JPSOAP_DateIntervalsGroups' => 'Juniper\Webservice\\JPSOAP_DateIntervalsGroups',
      'JPSOAP_DateIntervalsGroupsCheckInDates' => 'Juniper\Webservice\\JPSOAP_DateIntervalsGroupsCheckInDates',
      'ArrayOfJPSOAP_hotelRatePlanCancellationPolicyRule' => 'Juniper\Webservice\\ArrayOfJPSOAP_hotelRatePlanCancellationPolicyRule',
      'JPSOAP_hotelRatePlanCancellationPolicyRule' => 'Juniper\Webservice\\JPSOAP_hotelRatePlanCancellationPolicyRule',
      'ArrayOfJPSOAP_HotelRatePlanSupplement' => 'Juniper\Webservice\\ArrayOfJPSOAP_HotelRatePlanSupplement',
      'JPSOAP_HotelRatePlanSupplement' => 'Juniper\Webservice\\JPSOAP_HotelRatePlanSupplement',
      'JPSOAP_BaseSupleOfferRest' => 'Juniper\Webservice\\JPSOAP_BaseSupleOfferRest',
      'ArrayOfJPSOAP_IntCodeAttr2' => 'Juniper\Webservice\\ArrayOfJPSOAP_IntCodeAttr2',
      'ArrayOfJPSOAP_IntCodeAttr3' => 'Juniper\Webservice\\ArrayOfJPSOAP_IntCodeAttr3',
      'JPSOAP_HotelRatePlanOffer' => 'Juniper\Webservice\\JPSOAP_HotelRatePlanOffer',
      'JPSOAP_ApplicationRulesOffers' => 'Juniper\Webservice\\JPSOAP_ApplicationRulesOffers',
      'JPSOAP_ApplicationRules' => 'Juniper\Webservice\\JPSOAP_ApplicationRules',
      'JPSOAP_StayRestrictions' => 'Juniper\Webservice\\JPSOAP_StayRestrictions',
      'JPSOAP_BookingInAdvance' => 'Juniper\Webservice\\JPSOAP_BookingInAdvance',
      'JPSOAP_OccupanciesRules' => 'Juniper\Webservice\\JPSOAP_OccupanciesRules',
      'JPSOAP_Occupancies' => 'Juniper\Webservice\\JPSOAP_Occupancies',
      'JPSOAP_Occupancy' => 'Juniper\Webservice\\JPSOAP_Occupancy',
      'JPSOAP_ApplicationRulesSupplement' => 'Juniper\Webservice\\JPSOAP_ApplicationRulesSupplement',
      'ArrayOfJPSOAP_IntCodeAttr4' => 'Juniper\Webservice\\ArrayOfJPSOAP_IntCodeAttr4',
      'JPSOAP_SuppleOfferPrices' => 'Juniper\Webservice\\JPSOAP_SuppleOfferPrices',
      'JPSOAP_SuppleOfferPrice' => 'Juniper\Webservice\\JPSOAP_SuppleOfferPrice',
      'ArrayOfJPSOAP_OrderedTypedPrice' => 'Juniper\Webservice\\ArrayOfJPSOAP_OrderedTypedPrice',
      'ArrayOfJPSOAP_OrderedTypedPrice1' => 'Juniper\Webservice\\ArrayOfJPSOAP_OrderedTypedPrice1',
      'ArrayOfJPSOAP_OrderedTypedPrice2' => 'Juniper\Webservice\\ArrayOfJPSOAP_OrderedTypedPrice2',
      'ArrayOfJPSOAP_OrderedTypedPrice3' => 'Juniper\Webservice\\ArrayOfJPSOAP_OrderedTypedPrice3',
      'ArrayOfJPSOAP_Allotment' => 'Juniper\Webservice\\ArrayOfJPSOAP_Allotment',
      'JPSOAP_Allotment' => 'Juniper\Webservice\\JPSOAP_Allotment',
      'JPSOAP_HotelAvailAllotment' => 'Juniper\Webservice\\JPSOAP_HotelAvailAllotment',
      'JPSOAP_HotelRatePlanFreeNightsOffer' => 'Juniper\Webservice\\JPSOAP_HotelRatePlanFreeNightsOffer',
      'JPSOAP_HotelRatePlanFreePaxesOffer' => 'Juniper\Webservice\\JPSOAP_HotelRatePlanFreePaxesOffer',
      'ArrayOfJPSOAP_Order' => 'Juniper\Webservice\\ArrayOfJPSOAP_Order',
      'JPSOAP_Order' => 'Juniper\Webservice\\JPSOAP_Order',
      'ArrayOfJPSOAP_Order1' => 'Juniper\Webservice\\ArrayOfJPSOAP_Order1',
      'JPSOAP_HotelRatePlanBoardUpgradeOffer' => 'Juniper\Webservice\\JPSOAP_HotelRatePlanBoardUpgradeOffer',
      'JPSOAP_HotelRatePlanRoomUpgradeOffer' => 'Juniper\Webservice\\JPSOAP_HotelRatePlanRoomUpgradeOffer',
      'JPSOAP_HotelRatePlanRestriction' => 'Juniper\Webservice\\JPSOAP_HotelRatePlanRestriction',
      'ArrayOfJPSOAP_PickUpPoint' => 'Juniper\Webservice\\ArrayOfJPSOAP_PickUpPoint',
      'JPSOAP_PickUpPoint' => 'Juniper\Webservice\\JPSOAP_PickUpPoint',
      'ArrayOfJPSOAP_HotelRatePlanOffer' => 'Juniper\Webservice\\ArrayOfJPSOAP_HotelRatePlanOffer',
      'ArrayOfJPSOAP_HotelRatePlanRestriction' => 'Juniper\Webservice\\ArrayOfJPSOAP_HotelRatePlanRestriction',
      'ArrayOfJPSOAP_HotelAvailAllotment' => 'Juniper\Webservice\\ArrayOfJPSOAP_HotelAvailAllotment',
      'ArrayOfJPSOAP_HotelAvailStopSale' => 'Juniper\Webservice\\ArrayOfJPSOAP_HotelAvailStopSale',
      'JPSOAP_HotelAvailStopSale' => 'Juniper\Webservice\\JPSOAP_HotelAvailStopSale',
      'JPSOAP_HotelAvailReleases' => 'Juniper\Webservice\\JPSOAP_HotelAvailReleases',
      'JPSOAP_HotelAvailRelease' => 'Juniper\Webservice\\JPSOAP_HotelAvailRelease',
      'JP_HotelRatesRS' => 'Juniper\Webservice\\JP_HotelRatesRS',
      'JPSOAP_HotelInventoryHotel' => 'Juniper\Webservice\\JPSOAP_HotelInventoryHotel',
      'JPSOAP_IdTypeName' => 'Juniper\Webservice\\JPSOAP_IdTypeName',
      'JPSOAP_IdName' => 'Juniper\Webservice\\JPSOAP_IdName',
      'JPSOAP_IdTypeIntName' => 'Juniper\Webservice\\JPSOAP_IdTypeIntName',
      'ArrayOfJPSOAP_HotelInventoryDescription' => 'Juniper\Webservice\\ArrayOfJPSOAP_HotelInventoryDescription',
      'JPSOAP_HotelInventoryDescription' => 'Juniper\Webservice\\JPSOAP_HotelInventoryDescription',
      'JPSOAP_HotelInventoryAddress' => 'Juniper\Webservice\\JPSOAP_HotelInventoryAddress',
      'JPSOAP_HotelInventoryContactInfo' => 'Juniper\Webservice\\JPSOAP_HotelInventoryContactInfo',
      'ArrayOfJPSOAP_ContactNumber' => 'Juniper\Webservice\\ArrayOfJPSOAP_ContactNumber',
      'JPSOAP_ContactNumber' => 'Juniper\Webservice\\JPSOAP_ContactNumber',
      'JPSOAP_Email' => 'Juniper\Webservice\\JPSOAP_Email',
      'ArrayOfJPSOAP_ContactNumber1' => 'Juniper\Webservice\\ArrayOfJPSOAP_ContactNumber1',
      'ArrayOfJPSOAP_Email' => 'Juniper\Webservice\\ArrayOfJPSOAP_Email',
      'ArrayOfJPSOAP_HotelInventoryRoomType' => 'Juniper\Webservice\\ArrayOfJPSOAP_HotelInventoryRoomType',
      'JPSOAP_HotelInventoryRoomType' => 'Juniper\Webservice\\JPSOAP_HotelInventoryRoomType',
      'ArrayOfJPSOAP_Occupancy' => 'Juniper\Webservice\\ArrayOfJPSOAP_Occupancy',
      'ArrayOfJPSOAP_IdTypeIntName' => 'Juniper\Webservice\\ArrayOfJPSOAP_IdTypeIntName',
      'ArrayOfJPSOAP_IdName' => 'Juniper\Webservice\\ArrayOfJPSOAP_IdName',
      'ArrayOfJPSOAP_Image' => 'Juniper\Webservice\\ArrayOfJPSOAP_Image',
      'JPSOAP_Image' => 'Juniper\Webservice\\JPSOAP_Image',
      'ArrayOfJP_HotelInventorySimpleInfo' => 'Juniper\Webservice\\ArrayOfJP_HotelInventorySimpleInfo',
      'JP_HotelInventorySimpleInfo' => 'Juniper\Webservice\\JP_HotelInventorySimpleInfo',
      'JP_HotelSimpleInfo' => 'Juniper\Webservice\\JP_HotelSimpleInfo',
      'JP_ExtendedHotelInfo' => 'Juniper\Webservice\\JP_ExtendedHotelInfo',
      'JP_HotelInfoPortfolio' => 'Juniper\Webservice\\JP_HotelInfoPortfolio',
      'JP_City' => 'Juniper\Webservice\\JP_City',
      'HotelAllotmentResponse' => 'Juniper\Webservice\\HotelAllotmentResponse',
      'HotelRates' => 'Juniper\Webservice\\HotelRates',
      'JP_HotelRatesRQ' => 'Juniper\Webservice\\JP_HotelRatesRQ',
      'JP_HotelRatesRequest' => 'Juniper\Webservice\\JP_HotelRatesRequest',
      'HotelRatesResponse' => 'Juniper\Webservice\\HotelRatesResponse',
      'HotelSpecifications' => 'Juniper\Webservice\\HotelSpecifications',
      'JP_HotelSpecificationsRQ' => 'Juniper\Webservice\\JP_HotelSpecificationsRQ',
      'JP_HotelSpecificationsRequest' => 'Juniper\Webservice\\JP_HotelSpecificationsRequest',
      'HotelSpecificationsResponse' => 'Juniper\Webservice\\HotelSpecificationsResponse',
      'HotelListInventory' => 'Juniper\Webservice\\HotelListInventory',
      'JP_HotelListInventoryRQ' => 'Juniper\Webservice\\JP_HotelListInventoryRQ',
      'JP_HotelListInventoryRequest' => 'Juniper\Webservice\\JP_HotelListInventoryRequest',
      'HotelListInventoryResponse' => 'Juniper\Webservice\\HotelListInventoryResponse',
      'FinalCustomerRead' => 'Juniper\Webservice\\FinalCustomerRead',
      'JP_FinalCustomerRead' => 'Juniper\Webservice\\JP_FinalCustomerRead',
      'JP_StaticDataRS' => 'Juniper\Webservice\\JP_StaticDataRS',
      'JP_CruiseItemStaticData' => 'Juniper\Webservice\\JP_CruiseItemStaticData',
      'ArrayOfJP_CruiseItinerary' => 'Juniper\Webservice\\ArrayOfJP_CruiseItinerary',
      'ArrayOfJP_Ship' => 'Juniper\Webservice\\ArrayOfJP_Ship',
      'ArrayOfJP_CruiseData' => 'Juniper\Webservice\\ArrayOfJP_CruiseData',
      'JP_CruiseData' => 'Juniper\Webservice\\JP_CruiseData',
      'JP_HotelItemStaticData' => 'Juniper\Webservice\\JP_HotelItemStaticData',
      'ArrayOfJP_OfferSupplementType' => 'Juniper\Webservice\\ArrayOfJP_OfferSupplementType',
      'JP_OfferSupplementType' => 'Juniper\Webservice\\JP_OfferSupplementType',
      'ArrayOfJP_SpecialSupplementType' => 'Juniper\Webservice\\ArrayOfJP_SpecialSupplementType',
      'JP_SpecialSupplementType' => 'Juniper\Webservice\\JP_SpecialSupplementType',
      'ArrayOfJP_HotelContractType' => 'Juniper\Webservice\\ArrayOfJP_HotelContractType',
      'ArrayOfJP_Zone' => 'Juniper\Webservice\\ArrayOfJP_Zone',
      'ArrayOfJP_CityComplex' => 'Juniper\Webservice\\ArrayOfJP_CityComplex',
      'JP_CityComplex' => 'Juniper\Webservice\\JP_CityComplex',
      'JP_ZoneIdName' => 'Juniper\Webservice\\JP_ZoneIdName',
      'ArrayOfJP_FinalCustomerStaticData' => 'Juniper\Webservice\\ArrayOfJP_FinalCustomerStaticData',
      'JP_FinalCustomerStaticData' => 'Juniper\Webservice\\JP_FinalCustomerStaticData',
      'JP_FinalCustomerContactStaticData' => 'Juniper\Webservice\\JP_FinalCustomerContactStaticData',
      'JP_FinalCustomerAddressStaticData' => 'Juniper\Webservice\\JP_FinalCustomerAddressStaticData',
      'JP_AgencyList' => 'Juniper\Webservice\\JP_AgencyList',
      'JP_AgencyStaticData' => 'Juniper\Webservice\\JP_AgencyStaticData',
      'JP_AgencyGroup' => 'Juniper\Webservice\\JP_AgencyGroup',
      'ArrayOfJP_GenericCatalogueItem' => 'Juniper\Webservice\\ArrayOfJP_GenericCatalogueItem',
      'JP_GenericCatalogueItem' => 'Juniper\Webservice\\JP_GenericCatalogueItem',
      'ArrayOfJP_GenericCatalogueItemContent' => 'Juniper\Webservice\\ArrayOfJP_GenericCatalogueItemContent',
      'JP_GenericCatalogueItemContent' => 'Juniper\Webservice\\JP_GenericCatalogueItemContent',
      'ArrayOfJP_HotelSimpleInfo' => 'Juniper\Webservice\\ArrayOfJP_HotelSimpleInfo',
      'ArrayOfJP_ExtendedHotelInfo' => 'Juniper\Webservice\\ArrayOfJP_ExtendedHotelInfo',
      'JP_PackageList' => 'Juniper\Webservice\\JP_PackageList',
      'ArrayOfJP_PackagesCodeList' => 'Juniper\Webservice\\ArrayOfJP_PackagesCodeList',
      'JP_PackagesCodeList' => 'Juniper\Webservice\\JP_PackagesCodeList',
      'ArrayOfJP_RentacarLocationSimpleInfo' => 'Juniper\Webservice\\ArrayOfJP_RentacarLocationSimpleInfo',
      'JP_RentacarLocationSimpleInfo' => 'Juniper\Webservice\\JP_RentacarLocationSimpleInfo',
      'JP_PackageSearcherRS' => 'Juniper\Webservice\\JP_PackageSearcherRS',
      'ArrayOfJP_PackageSearcherItem' => 'Juniper\Webservice\\ArrayOfJP_PackageSearcherItem',
      'JP_PackageSearcherItem' => 'Juniper\Webservice\\JP_PackageSearcherItem',
      'ArrayOfJP_ProductSupplier' => 'Juniper\Webservice\\ArrayOfJP_ProductSupplier',
      'JP_ProductSupplier' => 'Juniper\Webservice\\JP_ProductSupplier',
      'JP_ServiceItemStaticData' => 'Juniper\Webservice\\JP_ServiceItemStaticData',
      'ArrayOfJP_InternalSupplier' => 'Juniper\Webservice\\ArrayOfJP_InternalSupplier',
      'JP_InternalSupplier' => 'Juniper\Webservice\\JP_InternalSupplier',
      'ArrayOfJP_ServiceCategory' => 'Juniper\Webservice\\ArrayOfJP_ServiceCategory',
      'JP_ServiceCategory' => 'Juniper\Webservice\\JP_ServiceCategory',
      'ArrayOfJP_ServiceType' => 'Juniper\Webservice\\ArrayOfJP_ServiceType',
      'JP_ServiceType' => 'Juniper\Webservice\\JP_ServiceType',
      'JP_TransferItemStaticData' => 'Juniper\Webservice\\JP_TransferItemStaticData',
      'ArrayOfJP_InternalSupplier1' => 'Juniper\Webservice\\ArrayOfJP_InternalSupplier1',
      'JP_VisaItemStaticData' => 'Juniper\Webservice\\JP_VisaItemStaticData',
      'ArrayOfJP_InternalSupplier2' => 'Juniper\Webservice\\ArrayOfJP_InternalSupplier2',
      'JP_MeetingPointList' => 'Juniper\Webservice\\JP_MeetingPointList',
      'ArrayOfJP_MeetingPointsZone' => 'Juniper\Webservice\\ArrayOfJP_MeetingPointsZone',
      'JP_MeetingPointsZone' => 'Juniper\Webservice\\JP_MeetingPointsZone',
      'ArrayOfJP_PackageCalendarPriceItems' => 'Juniper\Webservice\\ArrayOfJP_PackageCalendarPriceItems',
      'JP_PackageCalendarPriceItems' => 'Juniper\Webservice\\JP_PackageCalendarPriceItems',
      'JP_PackageCalendarPriceItem' => 'Juniper\Webservice\\JP_PackageCalendarPriceItem',
      'JP_HotelPortfolio' => 'Juniper\Webservice\\JP_HotelPortfolio',
      'FinalCustomerReadResponse' => 'Juniper\Webservice\\FinalCustomerReadResponse',
      'AgencyRead' => 'Juniper\Webservice\\AgencyRead',
      'JP_AgencyRead' => 'Juniper\Webservice\\JP_AgencyRead',
      'AgencyReadResponse' => 'Juniper\Webservice\\AgencyReadResponse',
      'SupplierList' => 'Juniper\Webservice\\SupplierList',
      'JP_SupplierListRQ' => 'Juniper\Webservice\\JP_SupplierListRQ',
      'JP_SupplierListRequest' => 'Juniper\Webservice\\JP_SupplierListRequest',
      'SupplierListResponse' => 'Juniper\Webservice\\SupplierListResponse',
      'GenericDataCatalogue' => 'Juniper\Webservice\\GenericDataCatalogue',
      'JP_GenericDataCatalogueRQ' => 'Juniper\Webservice\\JP_GenericDataCatalogueRQ',
      'JP_GenericDataCatalogueRequest' => 'Juniper\Webservice\\JP_GenericDataCatalogueRequest',
      'GenericDataCatalogueResponse' => 'Juniper\Webservice\\GenericDataCatalogueResponse',
      'ZoneList' => 'Juniper\Webservice\\ZoneList',
      'JP_ZoneListRQ' => 'Juniper\Webservice\\JP_ZoneListRQ',
      'JP_ZoneListRequest' => 'Juniper\Webservice\\JP_ZoneListRequest',
      'ZoneListResponse' => 'Juniper\Webservice\\ZoneListResponse',
      'CityList' => 'Juniper\Webservice\\CityList',
      'JP_CityListRQ' => 'Juniper\Webservice\\JP_CityListRQ',
      'CityListResponse' => 'Juniper\Webservice\\CityListResponse',
      'HotelCatalogueData' => 'Juniper\Webservice\\HotelCatalogueData',
      'JP_HotelCatalogueDataRQ' => 'Juniper\Webservice\\JP_HotelCatalogueDataRQ',
      'HotelCatalogueDataResponse' => 'Juniper\Webservice\\HotelCatalogueDataResponse',
      'HotelList' => 'Juniper\Webservice\\HotelList',
      'JP_HotelListRQ' => 'Juniper\Webservice\\JP_HotelListRQ',
      'JP_HotelListRequest' => 'Juniper\Webservice\\JP_HotelListRequest',
      'HotelListResponse' => 'Juniper\Webservice\\HotelListResponse',
      'HotelPortfolio' => 'Juniper\Webservice\\HotelPortfolio',
      'JP_HotelPortfolioRQ' => 'Juniper\Webservice\\JP_HotelPortfolioRQ',
      'HotelPortfolioResponse' => 'Juniper\Webservice\\HotelPortfolioResponse',
      'CruiseItinerary' => 'Juniper\Webservice\\CruiseItinerary',
      'JP_CruiseItineraryRQ' => 'Juniper\Webservice\\JP_CruiseItineraryRQ',
      'JP_CruiseItineraryRequest' => 'Juniper\Webservice\\JP_CruiseItineraryRequest',
      'JP_SearchSegmentsItinerary' => 'Juniper\Webservice\\JP_SearchSegmentsItinerary',
      'JP_SearchSegmentItinerary' => 'Juniper\Webservice\\JP_SearchSegmentItinerary',
      'CruiseItineraryResponse' => 'Juniper\Webservice\\CruiseItineraryResponse',
      'CruiseShip' => 'Juniper\Webservice\\CruiseShip',
      'JP_CruiseShipRQ' => 'Juniper\Webservice\\JP_CruiseShipRQ',
      'JP_CruiseShipRequest' => 'Juniper\Webservice\\JP_CruiseShipRequest',
      'JP_SearchSegmentsShip' => 'Juniper\Webservice\\JP_SearchSegmentsShip',
      'JP_SearchSegmentShip' => 'Juniper\Webservice\\JP_SearchSegmentShip',
      'CruiseShipResponse' => 'Juniper\Webservice\\CruiseShipResponse',
      'CruiseDataList' => 'Juniper\Webservice\\CruiseDataList',
      'JP_CruiseDataRQ' => 'Juniper\Webservice\\JP_CruiseDataRQ',
      'JP_CruiseDataRequest' => 'Juniper\Webservice\\JP_CruiseDataRequest',
      'CruiseDataListResponse' => 'Juniper\Webservice\\CruiseDataListResponse',
      'PackageList' => 'Juniper\Webservice\\PackageList',
      'JP_PackageListRQ' => 'Juniper\Webservice\\JP_PackageListRQ',
      'JP_PackageListRequest' => 'Juniper\Webservice\\JP_PackageListRequest',
      'PackageListResponse' => 'Juniper\Webservice\\PackageListResponse',
      'PackageCalendarPrice' => 'Juniper\Webservice\\PackageCalendarPrice',
      'JP_PackageCalendarPriceRQ' => 'Juniper\Webservice\\JP_PackageCalendarPriceRQ',
      'JP_PackageCalendarPriceParameter' => 'Juniper\Webservice\\JP_PackageCalendarPriceParameter',
      'PackageCalendarPriceResponse' => 'Juniper\Webservice\\PackageCalendarPriceResponse',
      'PackageSearcher' => 'Juniper\Webservice\\PackageSearcher',
      'JP_PackageSearcherRQ' => 'Juniper\Webservice\\JP_PackageSearcherRQ',
      'JP_PackageSearcherRequest' => 'Juniper\Webservice\\JP_PackageSearcherRequest',
      'PackageSearcherResponse' => 'Juniper\Webservice\\PackageSearcherResponse',
      'RentacarLocationList' => 'Juniper\Webservice\\RentacarLocationList',
      'JP_RentacarLocationListRQ' => 'Juniper\Webservice\\JP_RentacarLocationListRQ',
      'JP_RentacarLocationListRequest' => 'Juniper\Webservice\\JP_RentacarLocationListRequest',
      'RentacarLocationListResponse' => 'Juniper\Webservice\\RentacarLocationListResponse',
      'ServiceCatalogueData' => 'Juniper\Webservice\\ServiceCatalogueData',
      'JP_ServiceCatalogueDataRQ' => 'Juniper\Webservice\\JP_ServiceCatalogueDataRQ',
      'ServiceCatalogueDataResponse' => 'Juniper\Webservice\\ServiceCatalogueDataResponse',
      'TransferCatalogueData' => 'Juniper\Webservice\\TransferCatalogueData',
      'JP_TransferCatalogueDataRQ' => 'Juniper\Webservice\\JP_TransferCatalogueDataRQ',
      'TransferCatalogueDataResponse' => 'Juniper\Webservice\\TransferCatalogueDataResponse',
      'VisaCatalogueData' => 'Juniper\Webservice\\VisaCatalogueData',
      'JP_VisaCatalogueDataRQ' => 'Juniper\Webservice\\JP_VisaCatalogueDataRQ',
      'VisaCatalogueDataResponse' => 'Juniper\Webservice\\VisaCatalogueDataResponse',
      'MeetingPointList' => 'Juniper\Webservice\\MeetingPointList',
      'JP_MeetingPointListRQ' => 'Juniper\Webservice\\JP_MeetingPointListRQ',
      'JP_MeetingPointListRequest' => 'Juniper\Webservice\\JP_MeetingPointListRequest',
      'MeetingPointListResponse' => 'Juniper\Webservice\\MeetingPointListResponse',
      'HotelContent' => 'Juniper\Webservice\\HotelContent',
      'JP_HotelContentRQ' => 'Juniper\Webservice\\JP_HotelContentRQ',
      'ArrayOfJP_HotelSimpleContent' => 'Juniper\Webservice\\ArrayOfJP_HotelSimpleContent',
      'JP_HotelSimpleContent' => 'Juniper\Webservice\\JP_HotelSimpleContent',
      'JP_ContentRS' => 'Juniper\Webservice\\JP_ContentRS',
      'JP_Contents' => 'Juniper\Webservice\\JP_Contents',
      'JP_HotelContent' => 'Juniper\Webservice\\JP_HotelContent',
      'JP_SegmentHotel' => 'Juniper\Webservice\\JP_SegmentHotel',
      'JP_ContactInfo' => 'Juniper\Webservice\\JP_ContactInfo',
      'ArrayOfJP_Fax' => 'Juniper\Webservice\\ArrayOfJP_Fax',
      'JP_Fax' => 'Juniper\Webservice\\JP_Fax',
      'ArrayOfJP_Email' => 'Juniper\Webservice\\ArrayOfJP_Email',
      'JP_Email' => 'Juniper\Webservice\\JP_Email',
      'ArrayOfJP_Feature' => 'Juniper\Webservice\\ArrayOfJP_Feature',
      'JP_Feature' => 'Juniper\Webservice\\JP_Feature',
      'ArrayOfJP_PointOfInterest' => 'Juniper\Webservice\\ArrayOfJP_PointOfInterest',
      'JP_PointOfInterest' => 'Juniper\Webservice\\JP_PointOfInterest',
      'JP_HotelTimeInformation' => 'Juniper\Webservice\\JP_HotelTimeInformation',
      'JP_HotelCheckTime' => 'Juniper\Webservice\\JP_HotelCheckTime',
      'JP_PackageContent' => 'Juniper\Webservice\\JP_PackageContent',
      'ArrayOfJP_PackageZone' => 'Juniper\Webservice\\ArrayOfJP_PackageZone',
      'JP_PackageZone' => 'Juniper\Webservice\\JP_PackageZone',
      'ArrayOfJP_PackageDate' => 'Juniper\Webservice\\ArrayOfJP_PackageDate',
      'JP_PackageDate' => 'Juniper\Webservice\\JP_PackageDate',
      'ArrayOfJP_PriceFrom' => 'Juniper\Webservice\\ArrayOfJP_PriceFrom',
      'JP_PriceFrom' => 'Juniper\Webservice\\JP_PriceFrom',
      'HotelContentResponse' => 'Juniper\Webservice\\HotelContentResponse',
      'PackageContent' => 'Juniper\Webservice\\PackageContent',
      'JP_PackageContentRQ' => 'Juniper\Webservice\\JP_PackageContentRQ',
      'PackageContentResponse' => 'Juniper\Webservice\\PackageContentResponse',
      'RentacarLocationContent' => 'Juniper\Webservice\\RentacarLocationContent',
      'JP_RentacarLocationContentRQ' => 'Juniper\Webservice\\JP_RentacarLocationContentRQ',
      'ArrayOfJP_RentacarLocationSimpleContent' => 'Juniper\Webservice\\ArrayOfJP_RentacarLocationSimpleContent',
      'JP_RentacarLocationSimpleContent' => 'Juniper\Webservice\\JP_RentacarLocationSimpleContent',
      'RentacarLocationContentResponse' => 'Juniper\Webservice\\RentacarLocationContentResponse',
      'HotelCheckAvail' => 'Juniper\Webservice\\HotelCheckAvail',
      'JP_HotelCheckAvail' => 'Juniper\Webservice\\JP_HotelCheckAvail',
      'JP_HotelCheckAvailRequest' => 'Juniper\Webservice\\JP_HotelCheckAvailRequest',
      'JP_HotelOptionRequest' => 'Juniper\Webservice\\JP_HotelOptionRequest',
      'JP_CheckAvailRS' => 'Juniper\Webservice\\JP_CheckAvailRS',
      'JP_CheckAvailResults' => 'Juniper\Webservice\\JP_CheckAvailResults',
      'JP_CruiseCheckAvailResult' => 'Juniper\Webservice\\JP_CruiseCheckAvailResult',
      'JP_FlightCheckAvailResult' => 'Juniper\Webservice\\JP_FlightCheckAvailResult',
      'JP_FlightPriceInformation' => 'Juniper\Webservice\\JP_FlightPriceInformation',
      'JP_OptionalElements' => 'Juniper\Webservice\\JP_OptionalElements',
      'ArrayOfJP_CreditCardFee' => 'Juniper\Webservice\\ArrayOfJP_CreditCardFee',
      'JP_HotelCheckAvailResult' => 'Juniper\Webservice\\JP_HotelCheckAvailResult',
      'ArrayOfJP_HotelOptionCheckAvail' => 'Juniper\Webservice\\ArrayOfJP_HotelOptionCheckAvail',
      'JP_HotelOptionCheckAvail' => 'Juniper\Webservice\\JP_HotelOptionCheckAvail',
      'JP_InsuranceCheckAvailResult' => 'Juniper\Webservice\\JP_InsuranceCheckAvailResult',
      'JP_RentacarCheckAvailResult' => 'Juniper\Webservice\\JP_RentacarCheckAvailResult',
      'ArrayOfJP_RentacarCheckAvailOption' => 'Juniper\Webservice\\ArrayOfJP_RentacarCheckAvailOption',
      'JP_RentacarCheckAvailOption' => 'Juniper\Webservice\\JP_RentacarCheckAvailOption',
      'JP_ServiceCheckAvailResult' => 'Juniper\Webservice\\JP_ServiceCheckAvailResult',
      'JP_TransferCheckAvailResult' => 'Juniper\Webservice\\JP_TransferCheckAvailResult',
      'JP_VisaCheckAvailResult' => 'Juniper\Webservice\\JP_VisaCheckAvailResult',
      'HotelCheckAvailResponse' => 'Juniper\Webservice\\HotelCheckAvailResponse',
      'RentacarCheckAvail' => 'Juniper\Webservice\\RentacarCheckAvail',
      'JP_RentacarCheckAvailRQ' => 'Juniper\Webservice\\JP_RentacarCheckAvailRQ',
      'JP_RentacarCheckAvailRequest' => 'Juniper\Webservice\\JP_RentacarCheckAvailRequest',
      'JP_RentacarRequestCheckAvailOption' => 'Juniper\Webservice\\JP_RentacarRequestCheckAvailOption',
      'RentacarCheckAvailResponse' => 'Juniper\Webservice\\RentacarCheckAvailResponse',
      'InsuranceCheckAvail' => 'Juniper\Webservice\\InsuranceCheckAvail',
      'JP_InsuranceCheckAvail' => 'Juniper\Webservice\\JP_InsuranceCheckAvail',
      'JP_InsuranceCheckAvailRequest' => 'Juniper\Webservice\\JP_InsuranceCheckAvailRequest',
      'JP_InsuranceOptionRequest' => 'Juniper\Webservice\\JP_InsuranceOptionRequest',
      'InsuranceCheckAvailResponse' => 'Juniper\Webservice\\InsuranceCheckAvailResponse',
      'PackageCheckAvail' => 'Juniper\Webservice\\PackageCheckAvail',
      'JP_PackageCheckAvailRQ' => 'Juniper\Webservice\\JP_PackageCheckAvailRQ',
      'JP_PackageCheckAvailRequest' => 'Juniper\Webservice\\JP_PackageCheckAvailRequest',
      'PackageCheckAvailResponse' => 'Juniper\Webservice\\PackageCheckAvailResponse',
      'FlightCheckAvail' => 'Juniper\Webservice\\FlightCheckAvail',
      'JP_FlightCheckAvailRQ' => 'Juniper\Webservice\\JP_FlightCheckAvailRQ',
      'JP_FlightCheckAvailRequest' => 'Juniper\Webservice\\JP_FlightCheckAvailRequest',
      'JP_FlightOptionRequest' => 'Juniper\Webservice\\JP_FlightOptionRequest',
      'FlightCheckAvailResponse' => 'Juniper\Webservice\\FlightCheckAvailResponse',
      'CruiseCheckAvail' => 'Juniper\Webservice\\CruiseCheckAvail',
      'JP_CruiseCheckAvail' => 'Juniper\Webservice\\JP_CruiseCheckAvail',
      'JP_CruiseCheckAvailRequest' => 'Juniper\Webservice\\JP_CruiseCheckAvailRequest',
      'CruiseCheckAvailResponse' => 'Juniper\Webservice\\CruiseCheckAvailResponse',
      'ServiceCheckAvail' => 'Juniper\Webservice\\ServiceCheckAvail',
      'JP_ServiceCheckAvailRQ' => 'Juniper\Webservice\\JP_ServiceCheckAvailRQ',
      'JP_ServiceCheckAvailRequest' => 'Juniper\Webservice\\JP_ServiceCheckAvailRequest',
      'JP_ServiceOptionRQ' => 'Juniper\Webservice\\JP_ServiceOptionRQ',
      'ServiceCheckAvailResponse' => 'Juniper\Webservice\\ServiceCheckAvailResponse',
      'TransferCheckAvail' => 'Juniper\Webservice\\TransferCheckAvail',
      'JP_TransferCheckAvailRQ' => 'Juniper\Webservice\\JP_TransferCheckAvailRQ',
      'JP_TransferCheckAvailRequest' => 'Juniper\Webservice\\JP_TransferCheckAvailRequest',
      'JP_TransferOptionRQ' => 'Juniper\Webservice\\JP_TransferOptionRQ',
      'TransferCheckAvailResponse' => 'Juniper\Webservice\\TransferCheckAvailResponse',
      'VisaCheckAvail' => 'Juniper\Webservice\\VisaCheckAvail',
      'JP_VisaCheckAvailRQ' => 'Juniper\Webservice\\JP_VisaCheckAvailRQ',
      'JP_VisaCheckAvailRequest' => 'Juniper\Webservice\\JP_VisaCheckAvailRequest',
      'JP_VisaOptionRQ' => 'Juniper\Webservice\\JP_VisaOptionRQ',
      'VisaCheckAvailResponse' => 'Juniper\Webservice\\VisaCheckAvailResponse',
      'HotelBookingRules' => 'Juniper\Webservice\\HotelBookingRules',
      'JP_HotelBookingRuleRQ' => 'Juniper\Webservice\\JP_HotelBookingRuleRQ',
      'JP_HotelBookingRulesRequest' => 'Juniper\Webservice\\JP_HotelBookingRulesRequest',
      'JP_BookingRulesRS' => 'Juniper\Webservice\\JP_BookingRulesRS',
      'JP_BookingRules' => 'Juniper\Webservice\\JP_BookingRules',
      'JP_CruiseResultsBookingRules' => 'Juniper\Webservice\\JP_CruiseResultsBookingRules',
      'JP_FlightBookingRules' => 'Juniper\Webservice\\JP_FlightBookingRules',
      'JP_FlightRequiredFields' => 'Juniper\Webservice\\JP_FlightRequiredFields',
      'JP_HotelResultsBookingRules' => 'Juniper\Webservice\\JP_HotelResultsBookingRules',
      'ArrayOfJP_HotelOptionBookingRules' => 'Juniper\Webservice\\ArrayOfJP_HotelOptionBookingRules',
      'JP_HotelOptionBookingRules' => 'Juniper\Webservice\\JP_HotelOptionBookingRules',
      'JP_HotelRequiredFields' => 'Juniper\Webservice\\JP_HotelRequiredFields',
      'JP_HotelOptionalElements' => 'Juniper\Webservice\\JP_HotelOptionalElements',
      'ArrayOfJP_CreditCard' => 'Juniper\Webservice\\ArrayOfJP_CreditCard',
      'JP_CreditCard' => 'Juniper\Webservice\\JP_CreditCard',
      'JP_InsuranceBookingRules' => 'Juniper\Webservice\\JP_InsuranceBookingRules',
      'JP_InsuranceRequiredFields' => 'Juniper\Webservice\\JP_InsuranceRequiredFields',
      'JP_InsurancePriceInformation' => 'Juniper\Webservice\\JP_InsurancePriceInformation',
      'JP_PackageBookingRules' => 'Juniper\Webservice\\JP_PackageBookingRules',
      'JP_PackageRequiredFields' => 'Juniper\Webservice\\JP_PackageRequiredFields',
      'JP_PriceInformationPackage' => 'Juniper\Webservice\\JP_PriceInformationPackage',
      'JP_RentacarResultsBookingRules' => 'Juniper\Webservice\\JP_RentacarResultsBookingRules',
      'JP_RentacarRulesResult' => 'Juniper\Webservice\\JP_RentacarRulesResult',
      'ArrayOfJP_RentacarBookingRulesOption' => 'Juniper\Webservice\\ArrayOfJP_RentacarBookingRulesOption',
      'JP_RentacarBookingRulesOption' => 'Juniper\Webservice\\JP_RentacarBookingRulesOption',
      'JP_RentcarRequiredFields' => 'Juniper\Webservice\\JP_RentcarRequiredFields',
      'JP_RentacarPriceInformation' => 'Juniper\Webservice\\JP_RentacarPriceInformation',
      'JP_RentacarOptionalElements' => 'Juniper\Webservice\\JP_RentacarOptionalElements',
      'ArrayOfJP_RentacarLocationDetail' => 'Juniper\Webservice\\ArrayOfJP_RentacarLocationDetail',
      'JP_ServiceBookingRules' => 'Juniper\Webservice\\JP_ServiceBookingRules',
      'JP_ServiceRequiredFields' => 'Juniper\Webservice\\JP_ServiceRequiredFields',
      'JP_PriceInformationService' => 'Juniper\Webservice\\JP_PriceInformationService',
      'JP_TransferBookingRules' => 'Juniper\Webservice\\JP_TransferBookingRules',
      'JP_TransferRequiredFields' => 'Juniper\Webservice\\JP_TransferRequiredFields',
      'JP_PriceInformationTransfer' => 'Juniper\Webservice\\JP_PriceInformationTransfer',
      'JP_VisaBookingRules' => 'Juniper\Webservice\\JP_VisaBookingRules',
      'JP_VisaRequiredFields' => 'Juniper\Webservice\\JP_VisaRequiredFields',
      'JP_PriceInformationVisa' => 'Juniper\Webservice\\JP_PriceInformationVisa',
      'HotelBookingRulesResponse' => 'Juniper\Webservice\\HotelBookingRulesResponse',
      'RentacarBookingRules' => 'Juniper\Webservice\\RentacarBookingRules',
      'JP_RentacarBookingRulesRQ' => 'Juniper\Webservice\\JP_RentacarBookingRulesRQ',
      'JP_RentacarBookingRulesRequest' => 'Juniper\Webservice\\JP_RentacarBookingRulesRequest',
      'JP_RentacarRequestBookingRulesOption' => 'Juniper\Webservice\\JP_RentacarRequestBookingRulesOption',
      'JP_SearchSegmentsRentacarRules' => 'Juniper\Webservice\\JP_SearchSegmentsRentacarRules',
      'RentacarBookingRulesResponse' => 'Juniper\Webservice\\RentacarBookingRulesResponse',
      'FlightBookingRules' => 'Juniper\Webservice\\FlightBookingRules',
      'JP_FlightBookingRulesRQ' => 'Juniper\Webservice\\JP_FlightBookingRulesRQ',
      'JP_FlightBookingRulesRequest' => 'Juniper\Webservice\\JP_FlightBookingRulesRequest',
      'JP_FlightAssignSeats' => 'Juniper\Webservice\\JP_FlightAssignSeats',
      'JP_RelPaxesDist' => 'Juniper\Webservice\\JP_RelPaxesDist',
      'FlightBookingRulesResponse' => 'Juniper\Webservice\\FlightBookingRulesResponse',
      'InsuranceBookingRules' => 'Juniper\Webservice\\InsuranceBookingRules',
      'JP_InsuranceBookingRulesRQ' => 'Juniper\Webservice\\JP_InsuranceBookingRulesRQ',
      'JP_InsuranceBookingRulesRequest' => 'Juniper\Webservice\\JP_InsuranceBookingRulesRequest',
      'InsuranceBookingRulesResponse' => 'Juniper\Webservice\\InsuranceBookingRulesResponse',
      'PackageBookingRules' => 'Juniper\Webservice\\PackageBookingRules',
      'JP_PackageBookingRulesRQ' => 'Juniper\Webservice\\JP_PackageBookingRulesRQ',
      'JP_PackageBookingRuleRequest' => 'Juniper\Webservice\\JP_PackageBookingRuleRequest',
      'PackageBookingRulesResponse' => 'Juniper\Webservice\\PackageBookingRulesResponse',
      'CruiseBookingRules' => 'Juniper\Webservice\\CruiseBookingRules',
      'JP_CruiseBookingRulesRQ' => 'Juniper\Webservice\\JP_CruiseBookingRulesRQ',
      'JP_CruisesBookingRulesRequest' => 'Juniper\Webservice\\JP_CruisesBookingRulesRequest',
      'CruiseBookingRulesResponse' => 'Juniper\Webservice\\CruiseBookingRulesResponse',
      'ServiceBookingRules' => 'Juniper\Webservice\\ServiceBookingRules',
      'JP_ServiceBookingRulesRQ' => 'Juniper\Webservice\\JP_ServiceBookingRulesRQ',
      'JP_ServiceBookingRuleRequest' => 'Juniper\Webservice\\JP_ServiceBookingRuleRequest',
      'JP_ServiceRuleOptionRQ' => 'Juniper\Webservice\\JP_ServiceRuleOptionRQ',
      'ServiceBookingRulesResponse' => 'Juniper\Webservice\\ServiceBookingRulesResponse',
      'TransferBookingRules' => 'Juniper\Webservice\\TransferBookingRules',
      'JP_TransferBookingRulesRQ' => 'Juniper\Webservice\\JP_TransferBookingRulesRQ',
      'JP_TransferBookingRuleRequest' => 'Juniper\Webservice\\JP_TransferBookingRuleRequest',
      'JP_TransferRuleOptionRQ' => 'Juniper\Webservice\\JP_TransferRuleOptionRQ',
      'TransferBookingRulesResponse' => 'Juniper\Webservice\\TransferBookingRulesResponse',
      'VisaBookingRules' => 'Juniper\Webservice\\VisaBookingRules',
      'JP_VisaBookingRulesRQ' => 'Juniper\Webservice\\JP_VisaBookingRulesRQ',
      'JP_VisaBookingRuleRequest' => 'Juniper\Webservice\\JP_VisaBookingRuleRequest',
      'JP_VisaRuleOptionRQ' => 'Juniper\Webservice\\JP_VisaRuleOptionRQ',
      'VisaBookingRulesResponse' => 'Juniper\Webservice\\VisaBookingRulesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'http://xml2.bookingengine.es/WebService/JP/WebServiceJP.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Fields Check payment.
     *
     * @param CheckPaymentRequiredField $parameters
     * @return CheckPaymentRequiredFieldResponse
     */
    public function CheckPaymentRequiredField(CheckPaymentRequiredField $parameters)
    {
      return $this->__soapCall('CheckPaymentRequiredField', array($parameters));
    }

    /**
     * Check payment
     *
     * @param CheckPayment $parameters
     * @return CheckPaymentResponse
     */
    public function CheckPayment(CheckPayment $parameters)
    {
      return $this->__soapCall('CheckPayment', array($parameters));
    }

    /**
     * Credit Card payment.
     *
     * @param PaymentBooking $parameters
     * @return PaymentBookingResponse
     */
    public function PaymentBooking(PaymentBooking $parameters)
    {
      return $this->__soapCall('PaymentBooking', array($parameters));
    }

    /**
     * Get stored booking pricing.
     *
     * @param ShoppingBasketRead $parameters
     * @return ShoppingBasketReadResponse
     */
    public function ShoppingBasketRead(ShoppingBasketRead $parameters)
    {
      return $this->__soapCall('ShoppingBasketRead', array($parameters));
    }

    /**
     * Store booking pricing.
     *
     * @param ShoppingBasketSave $parameters
     * @return ShoppingBasketSaveResponse
     */
    public function ShoppingBasketSave(ShoppingBasketSave $parameters)
    {
      return $this->__soapCall('ShoppingBasketSave', array($parameters));
    }

    /**
     * Booking for hotels.
     *
     * @param HotelBooking $parameters
     * @return HotelBookingResponse
     */
    public function HotelBooking(HotelBooking $parameters)
    {
      return $this->__soapCall('HotelBooking', array($parameters));
    }

    /**
     * book for rentacar.
     *
     * @param RentacarBooking $parameters
     * @return RentacarBookingResponse
     */
    public function RentacarBooking(RentacarBooking $parameters)
    {
      return $this->__soapCall('RentacarBooking', array($parameters));
    }

    /**
     * Booking for hotels.
     *
     * @param InsuranceBooking $parameters
     * @return InsuranceBookingResponse
     */
    public function InsuranceBooking(InsuranceBooking $parameters)
    {
      return $this->__soapCall('InsuranceBooking', array($parameters));
    }

    /**
     * Booking for packages.
     *
     * @param PackageBooking $parameters
     * @return PackageBookingResponse
     */
    public function PackageBooking(PackageBooking $parameters)
    {
      return $this->__soapCall('PackageBooking', array($parameters));
    }

    /**
     * Booking for flights.
     *
     * @param FlightBooking $parameters
     * @return FlightBookingResponse
     */
    public function FlightBooking(FlightBooking $parameters)
    {
      return $this->__soapCall('FlightBooking', array($parameters));
    }

    /**
     * Booking for cruises.
     *
     * @param CruiseBooking $parameters
     * @return CruiseBookingResponse
     */
    public function CruiseBooking(CruiseBooking $parameters)
    {
      return $this->__soapCall('CruiseBooking', array($parameters));
    }

    /**
     * Booking for services.
     *
     * @param ServiceBooking $parameters
     * @return ServiceBookingResponse
     */
    public function ServiceBooking(ServiceBooking $parameters)
    {
      return $this->__soapCall('ServiceBooking', array($parameters));
    }

    /**
     * Booking for transfers.
     *
     * @param TransferBooking $parameters
     * @return TransferBookingResponse
     */
    public function TransferBooking(TransferBooking $parameters)
    {
      return $this->__soapCall('TransferBooking', array($parameters));
    }

    /**
     * Booking for visa.
     *
     * @param VisaBooking $parameters
     * @return VisaBookingResponse
     */
    public function VisaBooking(VisaBooking $parameters)
    {
      return $this->__soapCall('VisaBooking', array($parameters));
    }

    /**
     * cancel process for bookings.
     *
     * @param CancelBooking $parameters
     * @return CancelBookingResponse
     */
    public function CancelBooking(CancelBooking $parameters)
    {
      return $this->__soapCall('CancelBooking', array($parameters));
    }

    /**
     * Read process for bookings.
     *
     * @param ReadBooking $parameters
     * @return ReadBookingResponse
     */
    public function ReadBooking(ReadBooking $parameters)
    {
      return $this->__soapCall('ReadBooking', array($parameters));
    }

    /**
     * Read process for Bookings Agency.
     *
     * @param BookingList $parameters
     * @return BookingListResponse
     */
    public function BookingList(BookingList $parameters)
    {
      return $this->__soapCall('BookingList', array($parameters));
    }

    /**
     * Save final customer.
     *
     * @param FinalCustomerSave $parameters
     * @return FinalCustomerSaveResponse
     */
    public function FinalCustomerSave(FinalCustomerSave $parameters)
    {
      return $this->__soapCall('FinalCustomerSave', array($parameters));
    }

    /**
     * Modify for hotels
     *
     * @param HotelModify $parameters
     * @return HotelModifyResponse
     */
    public function HotelModify(HotelModify $parameters)
    {
      return $this->__soapCall('HotelModify', array($parameters));
    }

    /**
     * ConfirmModify for hotels
     *
     * @param HotelConfirmModify $parameters
     * @return HotelConfirmModifyResponse
     */
    public function HotelConfirmModify(HotelConfirmModify $parameters)
    {
      return $this->__soapCall('HotelConfirmModify', array($parameters));
    }

    /**
     * Availability for hotels.
     *
     * @param HotelAvail $parameters
     * @return HotelAvailResponse
     */
    public function HotelAvail(HotelAvail $parameters)
    {
      return $this->__soapCall('HotelAvail', array($parameters));
    }

    /**
     * Availability for rentacar.
     *
     * @param RentacarAvail $parameters
     * @return RentacarAvailResponse
     */
    public function RentacarAvail(RentacarAvail $parameters)
    {
      return $this->__soapCall('RentacarAvail', array($parameters));
    }

    /**
     * Availability calendar for hotels.
     *
     * @param HotelAvailCalendar $parameters
     * @return HotelAvailCalendarResponse
     */
    public function HotelAvailCalendar(HotelAvailCalendar $parameters)
    {
      return $this->__soapCall('HotelAvailCalendar', array($parameters));
    }

    /**
     * Future rates for hotels.
     *
     * @param HotelFutureRates $parameters
     * @return HotelFutureRatesResponse
     */
    public function HotelFutureRates(HotelFutureRates $parameters)
    {
      return $this->__soapCall('HotelFutureRates', array($parameters));
    }

    /**
     * Availability for packages.
     *
     * @param PackageAvail $parameters
     * @return PackageAvailResponse
     */
    public function PackageAvail(PackageAvail $parameters)
    {
      return $this->__soapCall('PackageAvail', array($parameters));
    }

    /**
     * Change product for packages.
     *
     * @param PackageChangeProduct $parameters
     * @return PackageChangeProductResponse
     */
    public function PackageChangeProduct(PackageChangeProduct $parameters)
    {
      return $this->__soapCall('PackageChangeProduct', array($parameters));
    }

    /**
     * Availability for Flights.
     *
     * @param FlightAvail $parameters
     * @return FlightAvailResponse
     */
    public function FlightAvail(FlightAvail $parameters)
    {
      return $this->__soapCall('FlightAvail', array($parameters));
    }

    /**
     * Pre-Availability for cruises.
     *
     * @param CruisePreAvail $parameters
     * @return CruisePreAvailResponse
     */
    public function CruisePreAvail(CruisePreAvail $parameters)
    {
      return $this->__soapCall('CruisePreAvail', array($parameters));
    }

    /**
     * Availability for cruises.
     *
     * @param CruiseAvail $parameters
     * @return CruiseAvailResponse
     */
    public function CruiseAvail(CruiseAvail $parameters)
    {
      return $this->__soapCall('CruiseAvail', array($parameters));
    }

    /**
     * Availability for insurances.
     *
     * @param InsuranceAvail $parameters
     * @return InsuranceAvailResponse
     */
    public function InsuranceAvail(InsuranceAvail $parameters)
    {
      return $this->__soapCall('InsuranceAvail', array($parameters));
    }

    /**
     * Availability for services.
     *
     * @param ServiceAvail $parameters
     * @return ServiceAvailResponse
     */
    public function ServiceAvail(ServiceAvail $parameters)
    {
      return $this->__soapCall('ServiceAvail', array($parameters));
    }

    /**
     * Availability for transfers.
     *
     * @param TransferAvail $parameters
     * @return TransferAvailResponse
     */
    public function TransferAvail(TransferAvail $parameters)
    {
      return $this->__soapCall('TransferAvail', array($parameters));
    }

    /**
     * Availability for transfers.
     *
     * @param TransferAvailByHotel $parameters
     * @return TransferAvailByHotelResponse
     */
    public function TransferAvailByHotel(TransferAvailByHotel $parameters)
    {
      return $this->__soapCall('TransferAvailByHotel', array($parameters));
    }

    /**
     * Availability for visas.
     *
     * @param VisaAvail $parameters
     * @return VisaAvailResponse
     */
    public function VisaAvail(VisaAvail $parameters)
    {
      return $this->__soapCall('VisaAvail', array($parameters));
    }

    /**
     * Hotel Allotment
     *
     * @param HotelAllotment $parameters
     * @return HotelAllotmentResponse
     */
    public function HotelAllotment(HotelAllotment $parameters)
    {
      return $this->__soapCall('HotelAllotment', array($parameters));
    }

    /**
     * Hotel Rates
     *
     * @param HotelRates $parameters
     * @return HotelRatesResponse
     */
    public function HotelRates(HotelRates $parameters)
    {
      return $this->__soapCall('HotelRates', array($parameters));
    }

    /**
     * Hotel Specifications
     *
     * @param HotelSpecifications $parameters
     * @return HotelSpecificationsResponse
     */
    public function HotelSpecifications(HotelSpecifications $parameters)
    {
      return $this->__soapCall('HotelSpecifications', array($parameters));
    }

    /**
     * Hotel List Inventory
     *
     * @param HotelListInventory $parameters
     * @return HotelListInventoryResponse
     */
    public function HotelListInventory(HotelListInventory $parameters)
    {
      return $this->__soapCall('HotelListInventory', array($parameters));
    }

    /**
     * Generic Final Customer List
     *
     * @param FinalCustomerRead $parameters
     * @return FinalCustomerReadResponse
     */
    public function FinalCustomerRead(FinalCustomerRead $parameters)
    {
      return $this->__soapCall('FinalCustomerRead', array($parameters));
    }

    /**
     * Generic Agency List
     *
     * @param AgencyRead $parameters
     * @return AgencyReadResponse
     */
    public function AgencyRead(AgencyRead $parameters)
    {
      return $this->__soapCall('AgencyRead', array($parameters));
    }

    /**
     * Generic Supplier List
     *
     * @param SupplierList $parameters
     * @return SupplierListResponse
     */
    public function SupplierList(SupplierList $parameters)
    {
      return $this->__soapCall('SupplierList', array($parameters));
    }

    /**
     * Generic Data Catalogue Request
     *
     * @param GenericDataCatalogue $parameters
     * @return GenericDataCatalogueResponse
     */
    public function GenericDataCatalogue(GenericDataCatalogue $parameters)
    {
      return $this->__soapCall('GenericDataCatalogue', array($parameters));
    }

    /**
     * Generic Zone List
     *
     * @param ZoneList $parameters
     * @return ZoneListResponse
     */
    public function ZoneList(ZoneList $parameters)
    {
      return $this->__soapCall('ZoneList', array($parameters));
    }

    /**
     * Generic City List
     *
     * @param CityList $parameters
     * @return CityListResponse
     */
    public function CityList(CityList $parameters)
    {
      return $this->__soapCall('CityList', array($parameters));
    }

    /**
     * Catalogue For Hotels
     *
     * @param HotelCatalogueData $parameters
     * @return HotelCatalogueDataResponse
     */
    public function HotelCatalogueData(HotelCatalogueData $parameters)
    {
      return $this->__soapCall('HotelCatalogueData', array($parameters));
    }

    /**
     * List of Hotels
     *
     * @param HotelList $parameters
     * @return HotelListResponse
     */
    public function HotelList(HotelList $parameters)
    {
      return $this->__soapCall('HotelList', array($parameters));
    }

    /**
     * Paged Portfolio of Hotels
     *
     * @param HotelPortfolio $parameters
     * @return HotelPortfolioResponse
     */
    public function HotelPortfolio(HotelPortfolio $parameters)
    {
      return $this->__soapCall('HotelPortfolio', array($parameters));
    }

    /**
     * List of itineraries.
     *
     * @param CruiseItinerary $parameters
     * @return CruiseItineraryResponse
     */
    public function CruiseItinerary(CruiseItinerary $parameters)
    {
      return $this->__soapCall('CruiseItinerary', array($parameters));
    }

    /**
     * List of ships.
     *
     * @param CruiseShip $parameters
     * @return CruiseShipResponse
     */
    public function CruiseShip(CruiseShip $parameters)
    {
      return $this->__soapCall('CruiseShip', array($parameters));
    }

    /**
     * List of Cruises Data.
     *
     * @param CruiseDataList $parameters
     * @return CruiseDataListResponse
     */
    public function CruiseDataList(CruiseDataList $parameters)
    {
      return $this->__soapCall('CruiseDataList', array($parameters));
    }

    /**
     * List of Packages
     *
     * @param PackageList $parameters
     * @return PackageListResponse
     */
    public function PackageList(PackageList $parameters)
    {
      return $this->__soapCall('PackageList', array($parameters));
    }

    /**
     * Package calendar price
     *
     * @param PackageCalendarPrice $parameters
     * @return PackageCalendarPriceResponse
     */
    public function PackageCalendarPrice(PackageCalendarPrice $parameters)
    {
      return $this->__soapCall('PackageCalendarPrice', array($parameters));
    }

    /**
     * Various of Packages
     *
     * @param PackageSearcher $parameters
     * @return PackageSearcherResponse
     */
    public function PackageSearcher(PackageSearcher $parameters)
    {
      return $this->__soapCall('PackageSearcher', array($parameters));
    }

    /**
     * List of rentacar locations
     *
     * @param RentacarLocationList $parameters
     * @return RentacarLocationListResponse
     */
    public function RentacarLocationList(RentacarLocationList $parameters)
    {
      return $this->__soapCall('RentacarLocationList', array($parameters));
    }

    /**
     * Catalogue For Services
     *
     * @param ServiceCatalogueData $parameters
     * @return ServiceCatalogueDataResponse
     */
    public function ServiceCatalogueData(ServiceCatalogueData $parameters)
    {
      return $this->__soapCall('ServiceCatalogueData', array($parameters));
    }

    /**
     * Catalogue For Transfers
     *
     * @param TransferCatalogueData $parameters
     * @return TransferCatalogueDataResponse
     */
    public function TransferCatalogueData(TransferCatalogueData $parameters)
    {
      return $this->__soapCall('TransferCatalogueData', array($parameters));
    }

    /**
     * Catalogue For Visas
     *
     * @param VisaCatalogueData $parameters
     * @return VisaCatalogueDataResponse
     */
    public function VisaCatalogueData(VisaCatalogueData $parameters)
    {
      return $this->__soapCall('VisaCatalogueData', array($parameters));
    }

    /**
     * Meeting Point List
     *
     * @param MeetingPointList $parameters
     * @return MeetingPointListResponse
     */
    public function MeetingPointList(MeetingPointList $parameters)
    {
      return $this->__soapCall('MeetingPointList', array($parameters));
    }

    /**
     * Content Of Hotels
     *
     * @param HotelContent $parameters
     * @return HotelContentResponse
     */
    public function HotelContent(HotelContent $parameters)
    {
      return $this->__soapCall('HotelContent', array($parameters));
    }

    /**
     * Content Of Packages
     *
     * @param PackageContent $parameters
     * @return PackageContentResponse
     */
    public function PackageContent(PackageContent $parameters)
    {
      return $this->__soapCall('PackageContent', array($parameters));
    }

    /**
     * Content Of Rentacar Locations
     *
     * @param RentacarLocationContent $parameters
     * @return RentacarLocationContentResponse
     */
    public function RentacarLocationContent(RentacarLocationContent $parameters)
    {
      return $this->__soapCall('RentacarLocationContent', array($parameters));
    }

    /**
     * CheckAvail for hotels.
     *
     * @param HotelCheckAvail $parameters
     * @return HotelCheckAvailResponse
     */
    public function HotelCheckAvail(HotelCheckAvail $parameters)
    {
      return $this->__soapCall('HotelCheckAvail', array($parameters));
    }

    /**
     * CheckAvail for rentacar.
     *
     * @param RentacarCheckAvail $parameters
     * @return RentacarCheckAvailResponse
     */
    public function RentacarCheckAvail(RentacarCheckAvail $parameters)
    {
      return $this->__soapCall('RentacarCheckAvail', array($parameters));
    }

    /**
     * CheckAvail for insurances.
     *
     * @param InsuranceCheckAvail $parameters
     * @return InsuranceCheckAvailResponse
     */
    public function InsuranceCheckAvail(InsuranceCheckAvail $parameters)
    {
      return $this->__soapCall('InsuranceCheckAvail', array($parameters));
    }

    /**
     * CheckAvail for packages.
     *
     * @param PackageCheckAvail $parameters
     * @return PackageCheckAvailResponse
     */
    public function PackageCheckAvail(PackageCheckAvail $parameters)
    {
      return $this->__soapCall('PackageCheckAvail', array($parameters));
    }

    /**
     * CheckAvail for Flights.
     *
     * @param FlightCheckAvail $parameters
     * @return FlightCheckAvailResponse
     */
    public function FlightCheckAvail(FlightCheckAvail $parameters)
    {
      return $this->__soapCall('FlightCheckAvail', array($parameters));
    }

    /**
     * CheckAvail for cruises.
     *
     * @param CruiseCheckAvail $parameters
     * @return CruiseCheckAvailResponse
     */
    public function CruiseCheckAvail(CruiseCheckAvail $parameters)
    {
      return $this->__soapCall('CruiseCheckAvail', array($parameters));
    }

    /**
     * CheckAvail for services and tickets.
     *
     * @param ServiceCheckAvail $parameters
     * @return ServiceCheckAvailResponse
     */
    public function ServiceCheckAvail(ServiceCheckAvail $parameters)
    {
      return $this->__soapCall('ServiceCheckAvail', array($parameters));
    }

    /**
     * CheckAvail for transfers.
     *
     * @param TransferCheckAvail $parameters
     * @return TransferCheckAvailResponse
     */
    public function TransferCheckAvail(TransferCheckAvail $parameters)
    {
      return $this->__soapCall('TransferCheckAvail', array($parameters));
    }

    /**
     * CheckAvail for visas services.
     *
     * @param VisaCheckAvail $parameters
     * @return VisaCheckAvailResponse
     */
    public function VisaCheckAvail(VisaCheckAvail $parameters)
    {
      return $this->__soapCall('VisaCheckAvail', array($parameters));
    }

    /**
     * BookingRules Of Hotels
     *
     * @param HotelBookingRules $parameters
     * @return HotelBookingRulesResponse
     */
    public function HotelBookingRules(HotelBookingRules $parameters)
    {
      return $this->__soapCall('HotelBookingRules', array($parameters));
    }

    /**
     * BookingRules Of Rentacar
     *
     * @param RentacarBookingRules $parameters
     * @return RentacarBookingRulesResponse
     */
    public function RentacarBookingRules(RentacarBookingRules $parameters)
    {
      return $this->__soapCall('RentacarBookingRules', array($parameters));
    }

    /**
     * BookingRules Of Flights
     *
     * @param FlightBookingRules $parameters
     * @return FlightBookingRulesResponse
     */
    public function FlightBookingRules(FlightBookingRules $parameters)
    {
      return $this->__soapCall('FlightBookingRules', array($parameters));
    }

    /**
     * BookingRules Of Insurances
     *
     * @param InsuranceBookingRules $parameters
     * @return InsuranceBookingRulesResponse
     */
    public function InsuranceBookingRules(InsuranceBookingRules $parameters)
    {
      return $this->__soapCall('InsuranceBookingRules', array($parameters));
    }

    /**
     * BookingRules Of Packages
     *
     * @param PackageBookingRules $parameters
     * @return PackageBookingRulesResponse
     */
    public function PackageBookingRules(PackageBookingRules $parameters)
    {
      return $this->__soapCall('PackageBookingRules', array($parameters));
    }

    /**
     * BookingRules of cruises.
     *
     * @param CruiseBookingRules $parameters
     * @return CruiseBookingRulesResponse
     */
    public function CruiseBookingRules(CruiseBookingRules $parameters)
    {
      return $this->__soapCall('CruiseBookingRules', array($parameters));
    }

    /**
     * BookingRules Of services
     *
     * @param ServiceBookingRules $parameters
     * @return ServiceBookingRulesResponse
     */
    public function ServiceBookingRules(ServiceBookingRules $parameters)
    {
      return $this->__soapCall('ServiceBookingRules', array($parameters));
    }

    /**
     * BookingRules Of transfers
     *
     * @param TransferBookingRules $parameters
     * @return TransferBookingRulesResponse
     */
    public function TransferBookingRules(TransferBookingRules $parameters)
    {
      return $this->__soapCall('TransferBookingRules', array($parameters));
    }

    /**
     * BookingRules Of visas
     *
     * @param VisaBookingRules $parameters
     * @return VisaBookingRulesResponse
     */
    public function VisaBookingRules(VisaBookingRules $parameters)
    {
      return $this->__soapCall('VisaBookingRules', array($parameters));
    }

}
