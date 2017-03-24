<?php

class WebServiceJP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'CheckPaymentRequiredField' => '\\CheckPaymentRequiredField',
      'JP_CheckPaymentRequiredFieldsRQ' => '\\JP_CheckPaymentRequiredFieldsRQ',
      'JP_Login' => '\\JP_Login',
      'JP_RestrictedOptions' => '\\JP_RestrictedOptions',
      'JP_RestrictedOption' => '\\JP_RestrictedOption',
      'CheckPaymentRequiredFieldResponse' => '\\CheckPaymentRequiredFieldResponse',
      'JP_CheckPaymentRequiredFieldsRS' => '\\JP_CheckPaymentRequiredFieldsRS',
      'ArrayOfJP_ErrorType' => '\\ArrayOfJP_ErrorType',
      'JP_ErrorType' => '\\JP_ErrorType',
      'JP_Warnings' => '\\JP_Warnings',
      'JP_WarningType' => '\\JP_WarningType',
      'JP_CancelInformation' => '\\JP_CancelInformation',
      'JP_CheckPaymentRequiredFieldsResponse' => '\\JP_CheckPaymentRequiredFieldsResponse',
      'ArrayOfJP_RequiredField' => '\\ArrayOfJP_RequiredField',
      'JP_RequiredField' => '\\JP_RequiredField',
      'ArrayOfJP_RequiredFieldValue' => '\\ArrayOfJP_RequiredFieldValue',
      'JP_RequiredFieldValue' => '\\JP_RequiredFieldValue',
      'CheckPayment' => '\\CheckPayment',
      'JP_CheckPaymentRQ' => '\\JP_CheckPaymentRQ',
      'JP_Request' => '\\JP_Request',
      'CheckPaymentResponse' => '\\CheckPaymentResponse',
      'JP_CheckPaymentRS' => '\\JP_CheckPaymentRS',
      'JP_CheckPaymentResponse' => '\\JP_CheckPaymentResponse',
      'PaymentBooking' => '\\PaymentBooking',
      'JP_PaymentRQ' => '\\JP_PaymentRQ',
      'JP_PaymentRequest' => '\\JP_PaymentRequest',
      'JP_Payment' => '\\JP_Payment',
      'JP_PaymentPrice' => '\\JP_PaymentPrice',
      'JP_CreditCardInfo' => '\\JP_CreditCardInfo',
      'JP_AddressType' => '\\JP_AddressType',
      'JP_StateProv' => '\\JP_StateProv',
      'JP_Country' => '\\JP_Country',
      'JP_Refund' => '\\JP_Refund',
      'PaymentBookingResponse' => '\\PaymentBookingResponse',
      'JP_PaymentRS' => '\\JP_PaymentRS',
      'JP_PaymentReservation' => '\\JP_PaymentReservation',
      'JP_PaymentInfo' => '\\JP_PaymentInfo',
      'ShoppingBasketRead' => '\\ShoppingBasketRead',
      'JP_ShoppingBasketRead' => '\\JP_ShoppingBasketRead',
      'JP_ShoppingBasket' => '\\JP_ShoppingBasket',
      'ShoppingBasketReadResponse' => '\\ShoppingBasketReadResponse',
      'JP_ShoppingBasketResult' => '\\JP_ShoppingBasketResult',
      'JP_ShoppingBasketItems' => '\\JP_ShoppingBasketItems',
      'ArrayOfString' => '\\ArrayOfString',
      'ShoppingBasketSave' => '\\ShoppingBasketSave',
      'JP_ShoppingBasketSave' => '\\JP_ShoppingBasketSave',
      'ShoppingBasketSaveResponse' => '\\ShoppingBasketSaveResponse',
      'HotelBooking' => '\\HotelBooking',
      'JP_HotelBooking' => '\\JP_HotelBooking',
      'JP_Paxes' => '\\JP_Paxes',
      'JP_Pax' => '\\JP_Pax',
      'JP_Document' => '\\JP_Document',
      'ArrayOfJP_PhoneNumber' => '\\ArrayOfJP_PhoneNumber',
      'JP_PhoneNumber' => '\\JP_PhoneNumber',
      'JP_BillingDataAFIP' => '\\JP_BillingDataAFIP',
      'ArrayOfJP_Card' => '\\ArrayOfJP_Card',
      'JP_Card' => '\\JP_Card',
      'JP_ResidentDiscount' => '\\JP_ResidentDiscount',
      'JP_LargeFamilyDiscount' => '\\JP_LargeFamilyDiscount',
      'JP_Holder' => '\\JP_Holder',
      'JP_RelPax' => '\\JP_RelPax',
      'ArrayOfJP_PaxSeat' => '\\ArrayOfJP_PaxSeat',
      'JP_PaxSeat' => '\\JP_PaxSeat',
      'JP_ExtendedRelPaxBag' => '\\JP_ExtendedRelPaxBag',
      'JP_ExtendedRelPax' => '\\JP_ExtendedRelPax',
      'ArrayOfJP_Price' => '\\ArrayOfJP_Price',
      'JP_Price' => '\\JP_Price',
      'JP_TotalFixAmounts' => '\\JP_TotalFixAmounts',
      'JP_Service' => '\\JP_Service',
      'JP_ServiceTaxes' => '\\JP_ServiceTaxes',
      'JP_Commissions' => '\\JP_Commissions',
      'JP_HandlingFees' => '\\JP_HandlingFees',
      'JP_Discount' => '\\JP_Discount',
      'JP_BreakdownPrice' => '\\JP_BreakdownPrice',
      'ArrayOfJP_ConceptBreakdown' => '\\ArrayOfJP_ConceptBreakdown',
      'JP_ConceptBreakdown' => '\\JP_ConceptBreakdown',
      'ArrayOfJP_ItemBreakdown' => '\\ArrayOfJP_ItemBreakdown',
      'JP_ItemBreakdown' => '\\JP_ItemBreakdown',
      'ArrayOfJP_CommonPriceBreakdown' => '\\ArrayOfJP_CommonPriceBreakdown',
      'JP_CommonPriceBreakdown' => '\\JP_CommonPriceBreakdown',
      'ArrayOfInt' => '\\ArrayOfInt',
      'JP_CommonPriceBreakdownReduced' => '\\JP_CommonPriceBreakdownReduced',
      'ArrayOfJP_CommonPriceBreakdown1' => '\\ArrayOfJP_CommonPriceBreakdown1',
      'ArrayOfJP_CommonPriceBreakdown2' => '\\ArrayOfJP_CommonPriceBreakdown2',
      'JP_CruiseExtendedRelPax' => '\\JP_CruiseExtendedRelPax',
      'JP_Agent' => '\\JP_Agent',
      'ArrayOfJP_Comment' => '\\ArrayOfJP_Comment',
      'JP_Comment' => '\\JP_Comment',
      'ArrayOfJP_HotelElement' => '\\ArrayOfJP_HotelElement',
      'JP_HotelElement' => '\\JP_HotelElement',
      'JP_BaseElement' => '\\JP_BaseElement',
      'JP_BookingCode' => '\\JP_BookingCode',
      'ArrayOfJP_RelPaxDist' => '\\ArrayOfJP_RelPaxDist',
      'JP_RelPaxDist' => '\\JP_RelPaxDist',
      'ArrayOfJP_RelPax' => '\\ArrayOfJP_RelPax',
      'JP_HotelRelPaxDist' => '\\JP_HotelRelPaxDist',
      'ArrayOfJP_RoomCategory' => '\\ArrayOfJP_RoomCategory',
      'JP_RoomCategory' => '\\JP_RoomCategory',
      'ArrayOfJP_HotelRoomCode' => '\\ArrayOfJP_HotelRoomCode',
      'JP_HotelRoomCode' => '\\JP_HotelRoomCode',
      'JP_InsuranceRelPaxDist' => '\\JP_InsuranceRelPaxDist',
      'JP_FlightElement' => '\\JP_FlightElement',
      'JP_FlightBookingInfo' => '\\JP_FlightBookingInfo',
      'JP_BookingPrice' => '\\JP_BookingPrice',
      'JP_PriceRange' => '\\JP_PriceRange',
      'JP_PackageElement' => '\\JP_PackageElement',
      'JP_PackageBookingInfo' => '\\JP_PackageBookingInfo',
      'ArrayOfJP_TransferBookingInfo' => '\\ArrayOfJP_TransferBookingInfo',
      'JP_TransferBookingInfo' => '\\JP_TransferBookingInfo',
      'JP_TransferOrigin' => '\\JP_TransferOrigin',
      'JP_MeetingPointInfo' => '\\JP_MeetingPointInfo',
      'JP_FlightInfo' => '\\JP_FlightInfo',
      'JP_ShipInfo' => '\\JP_ShipInfo',
      'JP_TrainInfo' => '\\JP_TrainInfo',
      'JP_StationInfo' => '\\JP_StationInfo',
      'JP_TransferDestination' => '\\JP_TransferDestination',
      'JP_HotelService' => '\\JP_HotelService',
      'JP_Room' => '\\JP_Room',
      'ArrayOfJP_ServiceBookingInfo' => '\\ArrayOfJP_ServiceBookingInfo',
      'JP_ServiceBookingInfo' => '\\JP_ServiceBookingInfo',
      'JP_FlightInfoService' => '\\JP_FlightInfoService',
      'JP_CruiseElement' => '\\JP_CruiseElement',
      'JP_CruiseBookingInfo' => '\\JP_CruiseBookingInfo',
      'JP_TransferElement' => '\\JP_TransferElement',
      'JP_ServiceElement' => '\\JP_ServiceElement',
      'JP_VisaElement' => '\\JP_VisaElement',
      'JP_TicketElement' => '\\JP_TicketElement',
      'JP_TransferByHotelElement' => '\\JP_TransferByHotelElement',
      'JP_RentacarElement' => '\\JP_RentacarElement',
      'JP_InsuranceElement' => '\\JP_InsuranceElement',
      'JP_HotelBookingInfo' => '\\JP_HotelBookingInfo',
      'ArrayOfJP_HotelPreference' => '\\ArrayOfJP_HotelPreference',
      'JP_HotelPreference' => '\\JP_HotelPreference',
      'JP_HotelBookingAdvancedOptions' => '\\JP_HotelBookingAdvancedOptions',
      'JP_BookingAdvancedOptions' => '\\JP_BookingAdvancedOptions',
      'JP_BaseAdvancedOptions' => '\\JP_BaseAdvancedOptions',
      'JP_AvailAdvancedOptions' => '\\JP_AvailAdvancedOptions',
      'JP_RentacarAvailAdvancedOptions' => '\\JP_RentacarAvailAdvancedOptions',
      'JP_HotelAvailAdvancedOptions' => '\\JP_HotelAvailAdvancedOptions',
      'JP_PackageAvailAdvancedOptions' => '\\JP_PackageAvailAdvancedOptions',
      'JP_FlightAvailAdvancedOptions' => '\\JP_FlightAvailAdvancedOptions',
      'JP_InsuranceAvailAdvancedOptions' => '\\JP_InsuranceAvailAdvancedOptions',
      'JP_ServicesAvailAdvancedOptions' => '\\JP_ServicesAvailAdvancedOptions',
      'JP_CruiseAvailAdvancedOptions' => '\\JP_CruiseAvailAdvancedOptions',
      'JP_BookingRulesAdvancedOptions' => '\\JP_BookingRulesAdvancedOptions',
      'JP_RentacarBookingRulesAdvancedOptions' => '\\JP_RentacarBookingRulesAdvancedOptions',
      'JP_HotelBookingRulesAdvancedOptions' => '\\JP_HotelBookingRulesAdvancedOptions',
      'JP_PackageBookingRulesAdvancedOptions' => '\\JP_PackageBookingRulesAdvancedOptions',
      'JP_FlightBookingRulesAdvancedOptions' => '\\JP_FlightBookingRulesAdvancedOptions',
      'JP_InsuranceBookingRulesAdvancedOptions' => '\\JP_InsuranceBookingRulesAdvancedOptions',
      'JP_ServicesBookingRulesAdvancedOptions' => '\\JP_ServicesBookingRulesAdvancedOptions',
      'JP_CruiseBookingRulesAdvancedOptions' => '\\JP_CruiseBookingRulesAdvancedOptions',
      'JP_CheckAvailAdvancedOptions' => '\\JP_CheckAvailAdvancedOptions',
      'JP_RentacarCheckAvailAdvancedOptions' => '\\JP_RentacarCheckAvailAdvancedOptions',
      'JP_HotelCheckAvailAdvancedOptions' => '\\JP_HotelCheckAvailAdvancedOptions',
      'JP_PackageCheckAvailAdvancedOptions' => '\\JP_PackageCheckAvailAdvancedOptions',
      'JP_FlightCheckAvailAdvancedOptions' => '\\JP_FlightCheckAvailAdvancedOptions',
      'JP_InsuranceCheckAvailAdvancedOptions' => '\\JP_InsuranceCheckAvailAdvancedOptions',
      'JP_ServicesCheckAvailAdvancedOptions' => '\\JP_ServicesCheckAvailAdvancedOptions',
      'JP_CruiseCheckAvailAdvancedOptions' => '\\JP_CruiseCheckAvailAdvancedOptions',
      'JP_CancelAdvancedOptions' => '\\JP_CancelAdvancedOptions',
      'JP_ReadAdvancedOptions' => '\\JP_ReadAdvancedOptions',
      'JP_ModifyAdvancedOptions' => '\\JP_ModifyAdvancedOptions',
      'JP_HotelModifyAdvancedOptions' => '\\JP_HotelModifyAdvancedOptions',
      'JP_BookingListAdvancedOptions' => '\\JP_BookingListAdvancedOptions',
      'JP_RentacarBookingAdvancedOptions' => '\\JP_RentacarBookingAdvancedOptions',
      'JP_PackageBookingAdvancedOptions' => '\\JP_PackageBookingAdvancedOptions',
      'JP_FlightBookingAdvancedOptions' => '\\JP_FlightBookingAdvancedOptions',
      'JP_InsuranceBookingAdvancedOptions' => '\\JP_InsuranceBookingAdvancedOptions',
      'JP_ServicesBookingAdvancedOptions' => '\\JP_ServicesBookingAdvancedOptions',
      'JP_CruiseBookingAdvancedOptions' => '\\JP_CruiseBookingAdvancedOptions',
      'HotelBookingResponse' => '\\HotelBookingResponse',
      'JP_BookingRS' => '\\JP_BookingRS',
      'ArrayOfJP_Reservation' => '\\ArrayOfJP_Reservation',
      'JP_Reservation' => '\\JP_Reservation',
      'ArrayOfJP_AgencyData' => '\\ArrayOfJP_AgencyData',
      'JP_AgencyData' => '\\JP_AgencyData',
      'JP_Items' => '\\JP_Items',
      'JP_FlightItem' => '\\JP_FlightItem',
      'JP_BaseItem' => '\\JP_BaseItem',
      'JP_ExternalInfo' => '\\JP_ExternalInfo',
      'JP_Supplier' => '\\JP_Supplier',
      'JP_CancellationPolicyRules' => '\\JP_CancellationPolicyRules',
      'JP_FirstDayCostCancellation' => '\\JP_FirstDayCostCancellation',
      'ArrayOfJP_Rule' => '\\ArrayOfJP_Rule',
      'JP_Rule' => '\\JP_Rule',
      'JP_RentacarItem' => '\\JP_RentacarItem',
      'JP_RentacarInfo' => '\\JP_RentacarInfo',
      'JP_RentacarAdditionalElements' => '\\JP_RentacarAdditionalElements',
      'ArrayOfJP_CarSupplement' => '\\ArrayOfJP_CarSupplement',
      'JP_CarSupplement' => '\\JP_CarSupplement',
      'ArrayOfJP_CarFee' => '\\ArrayOfJP_CarFee',
      'JP_CarFee' => '\\JP_CarFee',
      'JP_RentacarBookLocationDetails' => '\\JP_RentacarBookLocationDetails',
      'JP_RentacarLocationDetail' => '\\JP_RentacarLocationDetail',
      'JP_Zone' => '\\JP_Zone',
      'JP_OperationSchedule' => '\\JP_OperationSchedule',
      'ArrayOfJP_OperationTime' => '\\ArrayOfJP_OperationTime',
      'JP_OperationTime' => '\\JP_OperationTime',
      'ArrayOfJP_Hour' => '\\ArrayOfJP_Hour',
      'JP_Hour' => '\\JP_Hour',
      'JP_PackageItem' => '\\JP_PackageItem',
      'JP_PackageInfo' => '\\JP_PackageInfo',
      'ArrayOfString1' => '\\ArrayOfString1',
      'ArrayOfJP_PackageStay' => '\\ArrayOfJP_PackageStay',
      'JP_PackageStay' => '\\JP_PackageStay',
      'ArrayOfJP_PackageHotel' => '\\ArrayOfJP_PackageHotel',
      'JP_PackageHotel' => '\\JP_PackageHotel',
      'JP_HotelInfo' => '\\JP_HotelInfo',
      'JP_HotelChain' => '\\JP_HotelChain',
      'JP_HotelCategory' => '\\JP_HotelCategory',
      'JP_HotelType' => '\\JP_HotelType',
      'JP_PropertyType' => '\\JP_PropertyType',
      'JP_LabelType' => '\\JP_LabelType',
      'ArrayOfJP_ContentProvider' => '\\ArrayOfJP_ContentProvider',
      'JP_ContentProvider' => '\\JP_ContentProvider',
      'ArrayOfJP_ImageLong' => '\\ArrayOfJP_ImageLong',
      'JP_ImageLong' => '\\JP_ImageLong',
      'ArrayOfJP_MultimediaContent' => '\\ArrayOfJP_MultimediaContent',
      'JP_MultimediaContent' => '\\JP_MultimediaContent',
      'ArrayOfJP_HotelOption' => '\\ArrayOfJP_HotelOption',
      'JP_HotelOption' => '\\JP_HotelOption',
      'JP_Board' => '\\JP_Board',
      'ArrayOfJP_HotelRoom' => '\\ArrayOfJP_HotelRoom',
      'JP_HotelRoom' => '\\JP_HotelRoom',
      'JP_RoomOccupancy' => '\\JP_RoomOccupancy',
      'JP_HotelRoomSize' => '\\JP_HotelRoomSize',
      'JP_HotelAdditionalElements' => '\\JP_HotelAdditionalElements',
      'ArrayOfJP_HotelAdditionalElement' => '\\ArrayOfJP_HotelAdditionalElement',
      'JP_HotelAdditionalElement' => '\\JP_HotelAdditionalElement',
      'ArrayOfJP_HotelAdditionalElement1' => '\\ArrayOfJP_HotelAdditionalElement1',
      'ArrayOfJP_Flight' => '\\ArrayOfJP_Flight',
      'JP_Flight' => '\\JP_Flight',
      'JP_Routes' => '\\JP_Routes',
      'JP_Route' => '\\JP_Route',
      'ArrayOfJP_FlightSegment' => '\\ArrayOfJP_FlightSegment',
      'JP_FlightSegment' => '\\JP_FlightSegment',
      'ArrayOfJP_Equipment' => '\\ArrayOfJP_Equipment',
      'JP_Equipment' => '\\JP_Equipment',
      'ArrayOfJP_TechnicalStop' => '\\ArrayOfJP_TechnicalStop',
      'JP_TechnicalStop' => '\\JP_TechnicalStop',
      'JP_SeatingMap' => '\\JP_SeatingMap',
      'ArrayOfJP_SeatEquipment' => '\\ArrayOfJP_SeatEquipment',
      'JP_SeatEquipment' => '\\JP_SeatEquipment',
      'ArrayOfJP_Compartment' => '\\ArrayOfJP_Compartment',
      'JP_Compartment' => '\\JP_Compartment',
      'ArrayOfJP_Seat' => '\\ArrayOfJP_Seat',
      'JP_Seat' => '\\JP_Seat',
      'ArrayOfJP_GroupFee' => '\\ArrayOfJP_GroupFee',
      'JP_GroupFee' => '\\JP_GroupFee',
      'JP_AdditionalElements' => '\\JP_AdditionalElements',
      'ArrayOfString2' => '\\ArrayOfString2',
      'ArrayOfJP_Bag' => '\\ArrayOfJP_Bag',
      'JP_Bag' => '\\JP_Bag',
      'ArrayOfJP_ExtendedRelPaxBag' => '\\ArrayOfJP_ExtendedRelPaxBag',
      'JP_CreditCardFee' => '\\JP_CreditCardFee',
      'ArrayOfJP_FlightSupplement' => '\\ArrayOfJP_FlightSupplement',
      'JP_FlightSupplement' => '\\JP_FlightSupplement',
      'ArrayOfJP_ExtendedRelPax' => '\\ArrayOfJP_ExtendedRelPax',
      'ArrayOfJP_FlightRule' => '\\ArrayOfJP_FlightRule',
      'JP_FlightRule' => '\\JP_FlightRule',
      'ArrayOfJP_Transfer' => '\\ArrayOfJP_Transfer',
      'JP_Transfer' => '\\JP_Transfer',
      'JP_TransferInfo' => '\\JP_TransferInfo',
      'ArrayOfJP_TransferOption' => '\\ArrayOfJP_TransferOption',
      'JP_TransferOption' => '\\JP_TransferOption',
      'ArrayOfJP_ServiceDate' => '\\ArrayOfJP_ServiceDate',
      'JP_ServiceDate' => '\\JP_ServiceDate',
      'ArrayOfJP_ServiceContract' => '\\ArrayOfJP_ServiceContract',
      'JP_ServiceContract' => '\\JP_ServiceContract',
      'JP_Contract' => '\\JP_Contract',
      'JP_HotelContractType' => '\\JP_HotelContractType',
      'JP_HotelDailyContract' => '\\JP_HotelDailyContract',
      'JP_DailyHotelContract' => '\\JP_DailyHotelContract',
      'ArrayOfJP_Origin' => '\\ArrayOfJP_Origin',
      'JP_Origin' => '\\JP_Origin',
      'ArrayOfJP_Destination' => '\\ArrayOfJP_Destination',
      'JP_Destination' => '\\JP_Destination',
      'ArrayOfJP_ServiceProduct' => '\\ArrayOfJP_ServiceProduct',
      'JP_ServiceProduct' => '\\JP_ServiceProduct',
      'JP_ServiceInfo' => '\\JP_ServiceInfo',
      'ArrayOfJP_ServiceOption' => '\\ArrayOfJP_ServiceOption',
      'JP_ServiceOption' => '\\JP_ServiceOption',
      'ArrayOfJP_MeetingPoint' => '\\ArrayOfJP_MeetingPoint',
      'JP_MeetingPoint' => '\\JP_MeetingPoint',
      'ArrayOfJP_PackageInsurance' => '\\ArrayOfJP_PackageInsurance',
      'JP_PackageInsurance' => '\\JP_PackageInsurance',
      'JP_InsuranceInfo' => '\\JP_InsuranceInfo',
      'ArrayOfJP_Description' => '\\ArrayOfJP_Description',
      'JP_Description' => '\\JP_Description',
      'ArrayOfJP_Coverage' => '\\ArrayOfJP_Coverage',
      'JP_Coverage' => '\\JP_Coverage',
      'JP_EmergencyContact' => '\\JP_EmergencyContact',
      'ArrayOfJP_Tour' => '\\ArrayOfJP_Tour',
      'JP_Tour' => '\\JP_Tour',
      'ArrayOfJP_Car' => '\\ArrayOfJP_Car',
      'JP_Car' => '\\JP_Car',
      'JP_PackageAdditionalElements' => '\\JP_PackageAdditionalElements',
      'ArrayOfJP_PackageAdditionalElement' => '\\ArrayOfJP_PackageAdditionalElement',
      'JP_PackageAdditionalElement' => '\\JP_PackageAdditionalElement',
      'ArrayOfJP_PackageInfoAFIPAmount' => '\\ArrayOfJP_PackageInfoAFIPAmount',
      'JP_PackageInfoAFIPAmount' => '\\JP_PackageInfoAFIPAmount',
      'JP_HotelItem' => '\\JP_HotelItem',
      'JP_ItemHotelInfo' => '\\JP_ItemHotelInfo',
      'ArrayOfJP_ItemHotelRoom' => '\\ArrayOfJP_ItemHotelRoom',
      'JP_ItemHotelRoom' => '\\JP_ItemHotelRoom',
      'ArrayOfJP_HotelDailyContracts' => '\\ArrayOfJP_HotelDailyContracts',
      'JP_HotelDailyContracts' => '\\JP_HotelDailyContracts',
      'JP_InsuranceItem' => '\\JP_InsuranceItem',
      'JP_CruiseItem' => '\\JP_CruiseItem',
      'JP_CruiseResult' => '\\JP_CruiseResult',
      'JP_Ship' => '\\JP_Ship',
      'JP_Shipping' => '\\JP_Shipping',
      'JP_CruiseList' => '\\JP_CruiseList',
      'JP_Overview' => '\\JP_Overview',
      'JP_CruiseServices' => '\\JP_CruiseServices',
      'JP_CruiseSportServices' => '\\JP_CruiseSportServices',
      'JP_CruiseChildServices' => '\\JP_CruiseChildServices',
      'JP_CruiseCabinServices' => '\\JP_CruiseCabinServices',
      'JP_CruiseItinerary' => '\\JP_CruiseItinerary',
      'ArrayOfJP_CruiseStarDay' => '\\ArrayOfJP_CruiseStarDay',
      'JP_CruiseStarDay' => '\\JP_CruiseStarDay',
      'ArrayOfJP_Day' => '\\ArrayOfJP_Day',
      'JP_Day' => '\\JP_Day',
      'JP_Harbor' => '\\JP_Harbor',
      'ArrayOfJP_CruiseCategory' => '\\ArrayOfJP_CruiseCategory',
      'JP_CruiseCategory' => '\\JP_CruiseCategory',
      'JP_CruiseAdditionalElements' => '\\JP_CruiseAdditionalElements',
      'ArrayOfJP_CruiseComponent' => '\\ArrayOfJP_CruiseComponent',
      'JP_CruiseComponent' => '\\JP_CruiseComponent',
      'ArrayOfJP_CruiseStation' => '\\ArrayOfJP_CruiseStation',
      'JP_CruiseStation' => '\\JP_CruiseStation',
      'ArrayOfJP_CruiseFlight' => '\\ArrayOfJP_CruiseFlight',
      'JP_CruiseFlight' => '\\JP_CruiseFlight',
      'ArrayOfJP_CruiseFlightRoute' => '\\ArrayOfJP_CruiseFlightRoute',
      'JP_CruiseFlightRoute' => '\\JP_CruiseFlightRoute',
      'ArrayOfJP_CruiseSegment' => '\\ArrayOfJP_CruiseSegment',
      'JP_CruiseSegment' => '\\JP_CruiseSegment',
      'ArrayOfJP_CruisePromotion' => '\\ArrayOfJP_CruisePromotion',
      'JP_CruisePromotion' => '\\JP_CruisePromotion',
      'ArrayOfJP_CruiseSupplement' => '\\ArrayOfJP_CruiseSupplement',
      'JP_CruiseSupplement' => '\\JP_CruiseSupplement',
      'ArrayOfJP_CruiseExtendedRelPax' => '\\ArrayOfJP_CruiseExtendedRelPax',
      'ArrayOfJP_CruiseCabin' => '\\ArrayOfJP_CruiseCabin',
      'JP_CruiseCabin' => '\\JP_CruiseCabin',
      'JP_CruiseDeck' => '\\JP_CruiseDeck',
      'JP_CruiseRequiredFields' => '\\JP_CruiseRequiredFields',
      'JP_CruiseBooking' => '\\JP_CruiseBooking',
      'JP_CruiseElements' => '\\JP_CruiseElements',
      'JP_CruisePriceInformation' => '\\JP_CruisePriceInformation',
      'JP_CruiseOptionalElements' => '\\JP_CruiseOptionalElements',
      'ArrayOfJP_ExtendedRelPaxDist' => '\\ArrayOfJP_ExtendedRelPaxDist',
      'JP_ExtendedRelPaxDist' => '\\JP_ExtendedRelPaxDist',
      'JP_TransferItem' => '\\JP_TransferItem',
      'JP_ServiceItem' => '\\JP_ServiceItem',
      'JP_VisaItem' => '\\JP_VisaItem',
      'JP_VisaInfo' => '\\JP_VisaInfo',
      'ArrayOfJP_VisaOption' => '\\ArrayOfJP_VisaOption',
      'JP_VisaOption' => '\\JP_VisaOption',
      'RentacarBooking' => '\\RentacarBooking',
      'JP_RentacarBooking' => '\\JP_RentacarBooking',
      'JP_RentacarElements' => '\\JP_RentacarElements',
      'RentacarBookingResponse' => '\\RentacarBookingResponse',
      'InsuranceBooking' => '\\InsuranceBooking',
      'JP_InsuranceBooking' => '\\JP_InsuranceBooking',
      'JP_InsuranceElements' => '\\JP_InsuranceElements',
      'InsuranceBookingResponse' => '\\InsuranceBookingResponse',
      'PackageBooking' => '\\PackageBooking',
      'JP_PackageBooking' => '\\JP_PackageBooking',
      'JP_PackageElements' => '\\JP_PackageElements',
      'PackageBookingResponse' => '\\PackageBookingResponse',
      'FlightBooking' => '\\FlightBooking',
      'JP_FlightBooking' => '\\JP_FlightBooking',
      'ArrayOfJP_FlightElement' => '\\ArrayOfJP_FlightElement',
      'FlightBookingResponse' => '\\FlightBookingResponse',
      'CruiseBooking' => '\\CruiseBooking',
      'CruiseBookingResponse' => '\\CruiseBookingResponse',
      'ServiceBooking' => '\\ServiceBooking',
      'JP_ServiceBooking' => '\\JP_ServiceBooking',
      'JP_ServiceElements' => '\\JP_ServiceElements',
      'ServiceBookingResponse' => '\\ServiceBookingResponse',
      'TransferBooking' => '\\TransferBooking',
      'JP_TransferBooking' => '\\JP_TransferBooking',
      'JP_TransferElements' => '\\JP_TransferElements',
      'TransferBookingResponse' => '\\TransferBookingResponse',
      'VisaBooking' => '\\VisaBooking',
      'JP_VisaBooking' => '\\JP_VisaBooking',
      'JP_VisaElements' => '\\JP_VisaElements',
      'VisaBookingResponse' => '\\VisaBookingResponse',
      'CancelBooking' => '\\CancelBooking',
      'JP_CancelRQ' => '\\JP_CancelRQ',
      'JP_CancelRequest' => '\\JP_CancelRequest',
      'CancelBookingResponse' => '\\CancelBookingResponse',
      'ReadBooking' => '\\ReadBooking',
      'JP_ReadRQ' => '\\JP_ReadRQ',
      'JP_ReadRequest' => '\\JP_ReadRequest',
      'ReadBookingResponse' => '\\ReadBookingResponse',
      'BookingList' => '\\BookingList',
      'JP_BookingListRQ' => '\\JP_BookingListRQ',
      'JP_BookingListRequest' => '\\JP_BookingListRequest',
      'StartingBookingDate' => '\\StartingBookingDate',
      'BookingDate' => '\\BookingDate',
      'BookingListResponse' => '\\BookingListResponse',
      'JP_BookingListRS' => '\\JP_BookingListRS',
      'ArrayOfJP_BookingListRSReservation' => '\\ArrayOfJP_BookingListRSReservation',
      'Reservation' => '\\Reservation',
      'FinalCustomerSave' => '\\FinalCustomerSave',
      'JP_FinalCustomerSave' => '\\JP_FinalCustomerSave',
      'JP_FinalCustomerData' => '\\JP_FinalCustomerData',
      'JP_FinalCustomerContactData' => '\\JP_FinalCustomerContactData',
      'JP_FinalCustomerContactAddressData' => '\\JP_FinalCustomerContactAddressData',
      'FinalCustomerSaveResponse' => '\\FinalCustomerSaveResponse',
      'JP_FinalCustomerSaveResult' => '\\JP_FinalCustomerSaveResult',
      'HotelModify' => '\\HotelModify',
      'JP_HotelModify' => '\\JP_HotelModify',
      'JP_ReservationLocationModify' => '\\JP_ReservationLocationModify',
      'JP_SearchSegmentHotelsModify' => '\\JP_SearchSegmentHotelsModify',
      'ArrayOfJP_HotelRelPaxDist' => '\\ArrayOfJP_HotelRelPaxDist',
      'HotelModifyResponse' => '\\HotelModifyResponse',
      'JP_ModifyRS' => '\\JP_ModifyRS',
      'JP_ModifyResults' => '\\JP_ModifyResults',
      'JP_HotelResultModify' => '\\JP_HotelResultModify',
      'ArrayOfJP_HotelOptionModify' => '\\ArrayOfJP_HotelOptionModify',
      'JP_HotelOptionModify' => '\\JP_HotelOptionModify',
      'HotelConfirmModify' => '\\HotelConfirmModify',
      'JP_HotelConfirmModify' => '\\JP_HotelConfirmModify',
      'JP_HotelConfirmElement' => '\\JP_HotelConfirmElement',
      'JP_BaseModifyElement' => '\\JP_BaseModifyElement',
      'HotelConfirmModifyResponse' => '\\HotelConfirmModifyResponse',
      'HotelAvail' => '\\HotelAvail',
      'JP_HotelAvail' => '\\JP_HotelAvail',
      'JP_RequestHotelsAvail' => '\\JP_RequestHotelsAvail',
      'JP_SearchSegmentsHotels' => '\\JP_SearchSegmentsHotels',
      'JP_SearchSegmentHotels' => '\\JP_SearchSegmentHotels',
      'JP_SearchSegmentBase' => '\\JP_SearchSegmentBase',
      'JP_SearchSegmentRentacar' => '\\JP_SearchSegmentRentacar',
      'JP_SearchSegmentPackages' => '\\JP_SearchSegmentPackages',
      'ArrayOfString4' => '\\ArrayOfString4',
      'ArrayOfJP_HotelCategory' => '\\ArrayOfJP_HotelCategory',
      'ArrayOfString3' => '\\ArrayOfString3',
      'JP_SearchSegmentInsurance' => '\\JP_SearchSegmentInsurance',
      'JP_SearchSegmentTransfers' => '\\JP_SearchSegmentTransfers',
      'JP_SearchSegmentTransfersByHotel' => '\\JP_SearchSegmentTransfersByHotel',
      'JP_SearchSegmentServices' => '\\JP_SearchSegmentServices',
      'JP_SearchSegmentVisa' => '\\JP_SearchSegmentVisa',
      'JP_SearchSegmentRentacarRules' => '\\JP_SearchSegmentRentacarRules',
      'ArrayOfString5' => '\\ArrayOfString5',
      'ArrayOfJP_HotelType' => '\\ArrayOfJP_HotelType',
      'ArrayOfJP_PropertyType' => '\\ArrayOfJP_PropertyType',
      'ArrayOfJP_Board' => '\\ArrayOfJP_Board',
      'ArrayOfJP_SupplementHotelType' => '\\ArrayOfJP_SupplementHotelType',
      'JP_SupplementHotelType' => '\\JP_SupplementHotelType',
      'ArrayOfString6' => '\\ArrayOfString6',
      'ArrayOfJP_DailyHotelContract' => '\\ArrayOfJP_DailyHotelContract',
      'JP_SearchSegmentsHotelFutureRates' => '\\JP_SearchSegmentsHotelFutureRates',
      'ArrayOfString7' => '\\ArrayOfString7',
      'HotelAvailResponse' => '\\HotelAvailResponse',
      'JP_AvailResponseRS' => '\\JP_AvailResponseRS',
      'JP_Results' => '\\JP_Results',
      'JP_HotelCalendarResult' => '\\JP_HotelCalendarResult',
      'ArrayOfJP_HotelResult' => '\\ArrayOfJP_HotelResult',
      'JP_HotelResult' => '\\JP_HotelResult',
      'JP_HotelFutureRatesResults' => '\\JP_HotelFutureRatesResults',
      'JP_HotelFutureRatesResult' => '\\JP_HotelFutureRatesResult',
      'JP_FutureRatesResultInfo' => '\\JP_FutureRatesResultInfo',
      'JP_WarningDetails' => '\\JP_WarningDetails',
      'ArrayOfJP_WarningDate' => '\\ArrayOfJP_WarningDate',
      'JP_WarningDate' => '\\JP_WarningDate',
      'ArrayOfJP_WarningDistribution' => '\\ArrayOfJP_WarningDistribution',
      'JP_WarningDistribution' => '\\JP_WarningDistribution',
      'JP_InsuranceResult' => '\\JP_InsuranceResult',
      'JP_PackageResult' => '\\JP_PackageResult',
      'JP_RentacarResult' => '\\JP_RentacarResult',
      'ArrayOfJP_RentacarOption' => '\\ArrayOfJP_RentacarOption',
      'JP_RentacarOption' => '\\JP_RentacarOption',
      'JP_RentacarSaleContract' => '\\JP_RentacarSaleContract',
      'JP_ServiceResult' => '\\JP_ServiceResult',
      'JP_TransferResult' => '\\JP_TransferResult',
      'JP_VisaResult' => '\\JP_VisaResult',
      'RentacarAvail' => '\\RentacarAvail',
      'JP_RentacarAvail' => '\\JP_RentacarAvail',
      'JP_RentacarRequest' => '\\JP_RentacarRequest',
      'JP_SearchSegmentsRentacar' => '\\JP_SearchSegmentsRentacar',
      'ArrayOfJP_RentacarSupplier' => '\\ArrayOfJP_RentacarSupplier',
      'JP_RentacarSupplier' => '\\JP_RentacarSupplier',
      'ArrayOfJP_RentacarContract' => '\\ArrayOfJP_RentacarContract',
      'JP_RentacarContract' => '\\JP_RentacarContract',
      'ArrayOfJP_RentacarLocation' => '\\ArrayOfJP_RentacarLocation',
      'JP_RentacarLocation' => '\\JP_RentacarLocation',
      'RentacarAvailResponse' => '\\RentacarAvailResponse',
      'HotelAvailCalendar' => '\\HotelAvailCalendar',
      'JP_HotelAvailCalendar' => '\\JP_HotelAvailCalendar',
      'HotelAvailCalendarResponse' => '\\HotelAvailCalendarResponse',
      'HotelFutureRates' => '\\HotelFutureRates',
      'JP_HotelFutureRates' => '\\JP_HotelFutureRates',
      'JP_RequestFutureRatesAvail' => '\\JP_RequestFutureRatesAvail',
      'HotelFutureRatesResponse' => '\\HotelFutureRatesResponse',
      'PackageAvail' => '\\PackageAvail',
      'JP_PackageAvailabilityRQ' => '\\JP_PackageAvailabilityRQ',
      'JP_PackageRequest' => '\\JP_PackageRequest',
      'JP_SearchSegmentsPackages' => '\\JP_SearchSegmentsPackages',
      'PackageAvailResponse' => '\\PackageAvailResponse',
      'PackageChangeProduct' => '\\PackageChangeProduct',
      'JP_PackageChangeProductRQ' => '\\JP_PackageChangeProductRQ',
      'JP_PackageChangeProductRequest' => '\\JP_PackageChangeProductRequest',
      'JP_PackageOptionChangeProduct' => '\\JP_PackageOptionChangeProduct',
      'JP_PackageOptionRQ' => '\\JP_PackageOptionRQ',
      'PackageChangeProductResponse' => '\\PackageChangeProductResponse',
      'FlightAvail' => '\\FlightAvail',
      'JP_FlightAvail' => '\\JP_FlightAvail',
      'JP_FlightRequest' => '\\JP_FlightRequest',
      'JP_SearchSegmentsFlight' => '\\JP_SearchSegmentsFlight',
      'JP_SearchSegmentFlight' => '\\JP_SearchSegmentFlight',
      'ArrayOfJP_RouteDispo' => '\\ArrayOfJP_RouteDispo',
      'JP_RouteDispo' => '\\JP_RouteDispo',
      'JP_FlightDiscount' => '\\JP_FlightDiscount',
      'ArrayOfJP_Airline' => '\\ArrayOfJP_Airline',
      'JP_Airline' => '\\JP_Airline',
      'ArrayOfJP_FlightSupplier' => '\\ArrayOfJP_FlightSupplier',
      'JP_FlightSupplier' => '\\JP_FlightSupplier',
      'ArrayOfJP_FlightRate' => '\\ArrayOfJP_FlightRate',
      'JP_FlightRate' => '\\JP_FlightRate',
      'FlightAvailResponse' => '\\FlightAvailResponse',
      'CruisePreAvail' => '\\CruisePreAvail',
      'JP_CruisePreAvail' => '\\JP_CruisePreAvail',
      'JP_CruisePreRequest' => '\\JP_CruisePreRequest',
      'JP_SearchPreSegmentsCruise' => '\\JP_SearchPreSegmentsCruise',
      'JP_SearchPreSegmentCruise' => '\\JP_SearchPreSegmentCruise',
      'ArrayOfJP_CruiseSupplier' => '\\ArrayOfJP_CruiseSupplier',
      'JP_CruiseSupplier' => '\\JP_CruiseSupplier',
      'CruisePreAvailResponse' => '\\CruisePreAvailResponse',
      'CruiseAvail' => '\\CruiseAvail',
      'JP_CruiseAvail' => '\\JP_CruiseAvail',
      'JP_CruiseRequest' => '\\JP_CruiseRequest',
      'JP_CruiseSearch' => '\\JP_CruiseSearch',
      'JP_SearchSegmentsCruise' => '\\JP_SearchSegmentsCruise',
      'JP_SearchSegmentCruise' => '\\JP_SearchSegmentCruise',
      'CruiseAvailResponse' => '\\CruiseAvailResponse',
      'InsuranceAvail' => '\\InsuranceAvail',
      'JP_InsuranceAvail' => '\\JP_InsuranceAvail',
      'JP_RequestInsurancesAvail' => '\\JP_RequestInsurancesAvail',
      'JP_SearchSegmentsInsurance' => '\\JP_SearchSegmentsInsurance',
      'ArrayOfJP_ProductType' => '\\ArrayOfJP_ProductType',
      'ArrayOfJP_InsuranceRelPaxDist' => '\\ArrayOfJP_InsuranceRelPaxDist',
      'InsuranceAvailResponse' => '\\InsuranceAvailResponse',
      'ServiceAvail' => '\\ServiceAvail',
      'JP_ServiceAvailabilityRQ' => '\\JP_ServiceAvailabilityRQ',
      'JP_ServiceRequest' => '\\JP_ServiceRequest',
      'JP_SearchSegmentsServices' => '\\JP_SearchSegmentsServices',
      'ServiceAvailResponse' => '\\ServiceAvailResponse',
      'TransferAvail' => '\\TransferAvail',
      'JP_TransferAvailabilityRQ' => '\\JP_TransferAvailabilityRQ',
      'JP_TransferRequest' => '\\JP_TransferRequest',
      'JP_SearchSegmentsTransfers' => '\\JP_SearchSegmentsTransfers',
      'TransferAvailResponse' => '\\TransferAvailResponse',
      'TransferAvailByHotel' => '\\TransferAvailByHotel',
      'JP_TransferAvailabilityRQByHotel' => '\\JP_TransferAvailabilityRQByHotel',
      'JP_TransferRequestByHotel' => '\\JP_TransferRequestByHotel',
      'JP_SearchSegmentsTransfersByHotel' => '\\JP_SearchSegmentsTransfersByHotel',
      'TransferAvailByHotelResponse' => '\\TransferAvailByHotelResponse',
      'VisaAvail' => '\\VisaAvail',
      'JP_VisaAvailabilityRQ' => '\\JP_VisaAvailabilityRQ',
      'JP_VisaRequest' => '\\JP_VisaRequest',
      'JP_SearchSegmentsVisa' => '\\JP_SearchSegmentsVisa',
      'VisaAvailResponse' => '\\VisaAvailResponse',
      'HotelAllotment' => '\\HotelAllotment',
      'JP_HotelAllotmentRQ' => '\\JP_HotelAllotmentRQ',
      'JP_HotelAllotmentRequest' => '\\JP_HotelAllotmentRequest',
      'ArrayOfJP_HotelInventoryCode' => '\\ArrayOfJP_HotelInventoryCode',
      'JP_HotelInventoryCode' => '\\JP_HotelInventoryCode',
      'JP_InventoryRS' => '\\JP_InventoryRS',
      'JP_Inventory' => '\\JP_Inventory',
      'JP_HotelAllotmentRS' => '\\JP_HotelAllotmentRS',
      'JPSOAP_HotelAvailContract' => '\\JPSOAP_HotelAvailContract',
      'JPSOAP_Contract' => '\\JPSOAP_Contract',
      'JPSOAP_HotelRatePlanContract' => '\\JPSOAP_HotelRatePlanContract',
      'JPSOAP_Ages' => '\\JPSOAP_Ages',
      'JPSOAP_ContractRestrictions' => '\\JPSOAP_ContractRestrictions',
      'JPSOAP_RequiredOptionalSupplements' => '\\JPSOAP_RequiredOptionalSupplements',
      'ArrayOfJPSOAP_IntCodeAttr' => '\\ArrayOfJPSOAP_IntCodeAttr',
      'JPSOAP_IntCodeAttr' => '\\JPSOAP_IntCodeAttr',
      'ArrayOfJPSOAP_IntCodeAttr1' => '\\ArrayOfJPSOAP_IntCodeAttr1',
      'JPSOAP_CountryOfResidence' => '\\JPSOAP_CountryOfResidence',
      'ArrayOfJPSOAP_hotelRatePlanRate' => '\\ArrayOfJPSOAP_hotelRatePlanRate',
      'JPSOAP_hotelRatePlanRate' => '\\JPSOAP_hotelRatePlanRate',
      'ArrayOfJPSOAP_DateIntervals' => '\\ArrayOfJPSOAP_DateIntervals',
      'JPSOAP_DateIntervals' => '\\JPSOAP_DateIntervals',
      'JPSOAP_LengthOfStay' => '\\JPSOAP_LengthOfStay',
      'JPSOAP_RateDiscounts' => '\\JPSOAP_RateDiscounts',
      'ArrayOfJPSOAP_Discount' => '\\ArrayOfJPSOAP_Discount',
      'JPSOAP_Discount' => '\\JPSOAP_Discount',
      'ArrayOfJPSOAP_Discount1' => '\\ArrayOfJPSOAP_Discount1',
      'ArrayOfJPSOAP_Discount2' => '\\ArrayOfJPSOAP_Discount2',
      'ArrayOfJPSOAP_RatePrice' => '\\ArrayOfJPSOAP_RatePrice',
      'JPSOAP_RatePrice' => '\\JPSOAP_RatePrice',
      'JPSOAP_Price' => '\\JPSOAP_Price',
      'JPSOAP_OrderedPrice' => '\\JPSOAP_OrderedPrice',
      'JPSOAP_OrderedTypedPrice' => '\\JPSOAP_OrderedTypedPrice',
      'JPSOAP_PriceTyped' => '\\JPSOAP_PriceTyped',
      'ArrayOfJPSOAP_OrderedPrice' => '\\ArrayOfJPSOAP_OrderedPrice',
      'ArrayOfJPSOAP_OrderedPrice1' => '\\ArrayOfJPSOAP_OrderedPrice1',
      'ArrayOfJPSOAP_OrderedPrice2' => '\\ArrayOfJPSOAP_OrderedPrice2',
      'ArrayOfJPSOAP_hotelRatePlanTax' => '\\ArrayOfJPSOAP_hotelRatePlanTax',
      'JPSOAP_hotelRatePlanTax' => '\\JPSOAP_hotelRatePlanTax',
      'ArrayOfJPSOAP_hotelRatePlanCancellationPolicy' => '\\ArrayOfJPSOAP_hotelRatePlanCancellationPolicy',
      'JPSOAP_hotelRatePlanCancellationPolicy' => '\\JPSOAP_hotelRatePlanCancellationPolicy',
      'JPSOAP_DateIntervalsGroupsStayDates' => '\\JPSOAP_DateIntervalsGroupsStayDates',
      'JPSOAP_DateIntervalsGroups' => '\\JPSOAP_DateIntervalsGroups',
      'JPSOAP_DateIntervalsGroupsCheckInDates' => '\\JPSOAP_DateIntervalsGroupsCheckInDates',
      'ArrayOfJPSOAP_hotelRatePlanCancellationPolicyRule' => '\\ArrayOfJPSOAP_hotelRatePlanCancellationPolicyRule',
      'JPSOAP_hotelRatePlanCancellationPolicyRule' => '\\JPSOAP_hotelRatePlanCancellationPolicyRule',
      'ArrayOfJPSOAP_HotelRatePlanSupplement' => '\\ArrayOfJPSOAP_HotelRatePlanSupplement',
      'JPSOAP_HotelRatePlanSupplement' => '\\JPSOAP_HotelRatePlanSupplement',
      'JPSOAP_BaseSupleOfferRest' => '\\JPSOAP_BaseSupleOfferRest',
      'ArrayOfJPSOAP_IntCodeAttr2' => '\\ArrayOfJPSOAP_IntCodeAttr2',
      'ArrayOfJPSOAP_IntCodeAttr3' => '\\ArrayOfJPSOAP_IntCodeAttr3',
      'JPSOAP_HotelRatePlanOffer' => '\\JPSOAP_HotelRatePlanOffer',
      'JPSOAP_ApplicationRulesOffers' => '\\JPSOAP_ApplicationRulesOffers',
      'JPSOAP_ApplicationRules' => '\\JPSOAP_ApplicationRules',
      'JPSOAP_StayRestrictions' => '\\JPSOAP_StayRestrictions',
      'JPSOAP_BookingInAdvance' => '\\JPSOAP_BookingInAdvance',
      'JPSOAP_OccupanciesRules' => '\\JPSOAP_OccupanciesRules',
      'JPSOAP_Occupancies' => '\\JPSOAP_Occupancies',
      'JPSOAP_Occupancy' => '\\JPSOAP_Occupancy',
      'JPSOAP_ApplicationRulesSupplement' => '\\JPSOAP_ApplicationRulesSupplement',
      'ArrayOfJPSOAP_IntCodeAttr4' => '\\ArrayOfJPSOAP_IntCodeAttr4',
      'JPSOAP_SuppleOfferPrices' => '\\JPSOAP_SuppleOfferPrices',
      'JPSOAP_SuppleOfferPrice' => '\\JPSOAP_SuppleOfferPrice',
      'ArrayOfJPSOAP_OrderedTypedPrice' => '\\ArrayOfJPSOAP_OrderedTypedPrice',
      'ArrayOfJPSOAP_OrderedTypedPrice1' => '\\ArrayOfJPSOAP_OrderedTypedPrice1',
      'ArrayOfJPSOAP_OrderedTypedPrice2' => '\\ArrayOfJPSOAP_OrderedTypedPrice2',
      'ArrayOfJPSOAP_OrderedTypedPrice3' => '\\ArrayOfJPSOAP_OrderedTypedPrice3',
      'ArrayOfJPSOAP_Allotment' => '\\ArrayOfJPSOAP_Allotment',
      'JPSOAP_Allotment' => '\\JPSOAP_Allotment',
      'JPSOAP_HotelAvailAllotment' => '\\JPSOAP_HotelAvailAllotment',
      'JPSOAP_HotelRatePlanFreeNightsOffer' => '\\JPSOAP_HotelRatePlanFreeNightsOffer',
      'JPSOAP_HotelRatePlanFreePaxesOffer' => '\\JPSOAP_HotelRatePlanFreePaxesOffer',
      'ArrayOfJPSOAP_Order' => '\\ArrayOfJPSOAP_Order',
      'JPSOAP_Order' => '\\JPSOAP_Order',
      'ArrayOfJPSOAP_Order1' => '\\ArrayOfJPSOAP_Order1',
      'JPSOAP_HotelRatePlanBoardUpgradeOffer' => '\\JPSOAP_HotelRatePlanBoardUpgradeOffer',
      'JPSOAP_HotelRatePlanRoomUpgradeOffer' => '\\JPSOAP_HotelRatePlanRoomUpgradeOffer',
      'JPSOAP_HotelRatePlanRestriction' => '\\JPSOAP_HotelRatePlanRestriction',
      'ArrayOfJPSOAP_PickUpPoint' => '\\ArrayOfJPSOAP_PickUpPoint',
      'JPSOAP_PickUpPoint' => '\\JPSOAP_PickUpPoint',
      'ArrayOfJPSOAP_HotelRatePlanOffer' => '\\ArrayOfJPSOAP_HotelRatePlanOffer',
      'ArrayOfJPSOAP_HotelRatePlanRestriction' => '\\ArrayOfJPSOAP_HotelRatePlanRestriction',
      'ArrayOfJPSOAP_HotelAvailAllotment' => '\\ArrayOfJPSOAP_HotelAvailAllotment',
      'ArrayOfJPSOAP_HotelAvailStopSale' => '\\ArrayOfJPSOAP_HotelAvailStopSale',
      'JPSOAP_HotelAvailStopSale' => '\\JPSOAP_HotelAvailStopSale',
      'JPSOAP_HotelAvailReleases' => '\\JPSOAP_HotelAvailReleases',
      'JPSOAP_HotelAvailRelease' => '\\JPSOAP_HotelAvailRelease',
      'JP_HotelRatesRS' => '\\JP_HotelRatesRS',
      'JPSOAP_HotelInventoryHotel' => '\\JPSOAP_HotelInventoryHotel',
      'JPSOAP_IdTypeName' => '\\JPSOAP_IdTypeName',
      'JPSOAP_IdName' => '\\JPSOAP_IdName',
      'JPSOAP_IdTypeIntName' => '\\JPSOAP_IdTypeIntName',
      'ArrayOfJPSOAP_HotelInventoryDescription' => '\\ArrayOfJPSOAP_HotelInventoryDescription',
      'JPSOAP_HotelInventoryDescription' => '\\JPSOAP_HotelInventoryDescription',
      'JPSOAP_HotelInventoryAddress' => '\\JPSOAP_HotelInventoryAddress',
      'JPSOAP_HotelInventoryContactInfo' => '\\JPSOAP_HotelInventoryContactInfo',
      'ArrayOfJPSOAP_ContactNumber' => '\\ArrayOfJPSOAP_ContactNumber',
      'JPSOAP_ContactNumber' => '\\JPSOAP_ContactNumber',
      'JPSOAP_Email' => '\\JPSOAP_Email',
      'ArrayOfJPSOAP_ContactNumber1' => '\\ArrayOfJPSOAP_ContactNumber1',
      'ArrayOfJPSOAP_Email' => '\\ArrayOfJPSOAP_Email',
      'ArrayOfJPSOAP_HotelInventoryRoomType' => '\\ArrayOfJPSOAP_HotelInventoryRoomType',
      'JPSOAP_HotelInventoryRoomType' => '\\JPSOAP_HotelInventoryRoomType',
      'ArrayOfJPSOAP_Occupancy' => '\\ArrayOfJPSOAP_Occupancy',
      'ArrayOfJPSOAP_IdTypeIntName' => '\\ArrayOfJPSOAP_IdTypeIntName',
      'ArrayOfJPSOAP_IdName' => '\\ArrayOfJPSOAP_IdName',
      'ArrayOfJPSOAP_Image' => '\\ArrayOfJPSOAP_Image',
      'JPSOAP_Image' => '\\JPSOAP_Image',
      'ArrayOfJP_HotelInventorySimpleInfo' => '\\ArrayOfJP_HotelInventorySimpleInfo',
      'JP_HotelInventorySimpleInfo' => '\\JP_HotelInventorySimpleInfo',
      'JP_HotelSimpleInfo' => '\\JP_HotelSimpleInfo',
      'JP_ExtendedHotelInfo' => '\\JP_ExtendedHotelInfo',
      'JP_HotelInfoPortfolio' => '\\JP_HotelInfoPortfolio',
      'JP_City' => '\\JP_City',
      'HotelAllotmentResponse' => '\\HotelAllotmentResponse',
      'HotelRates' => '\\HotelRates',
      'JP_HotelRatesRQ' => '\\JP_HotelRatesRQ',
      'JP_HotelRatesRequest' => '\\JP_HotelRatesRequest',
      'HotelRatesResponse' => '\\HotelRatesResponse',
      'HotelSpecifications' => '\\HotelSpecifications',
      'JP_HotelSpecificationsRQ' => '\\JP_HotelSpecificationsRQ',
      'JP_HotelSpecificationsRequest' => '\\JP_HotelSpecificationsRequest',
      'HotelSpecificationsResponse' => '\\HotelSpecificationsResponse',
      'HotelListInventory' => '\\HotelListInventory',
      'JP_HotelListInventoryRQ' => '\\JP_HotelListInventoryRQ',
      'JP_HotelListInventoryRequest' => '\\JP_HotelListInventoryRequest',
      'HotelListInventoryResponse' => '\\HotelListInventoryResponse',
      'FinalCustomerRead' => '\\FinalCustomerRead',
      'JP_FinalCustomerRead' => '\\JP_FinalCustomerRead',
      'JP_StaticDataRS' => '\\JP_StaticDataRS',
      'JP_CruiseItemStaticData' => '\\JP_CruiseItemStaticData',
      'ArrayOfJP_CruiseItinerary' => '\\ArrayOfJP_CruiseItinerary',
      'ArrayOfJP_Ship' => '\\ArrayOfJP_Ship',
      'ArrayOfJP_CruiseData' => '\\ArrayOfJP_CruiseData',
      'JP_CruiseData' => '\\JP_CruiseData',
      'JP_HotelItemStaticData' => '\\JP_HotelItemStaticData',
      'ArrayOfJP_OfferSupplementType' => '\\ArrayOfJP_OfferSupplementType',
      'JP_OfferSupplementType' => '\\JP_OfferSupplementType',
      'ArrayOfJP_SpecialSupplementType' => '\\ArrayOfJP_SpecialSupplementType',
      'JP_SpecialSupplementType' => '\\JP_SpecialSupplementType',
      'ArrayOfJP_HotelContractType' => '\\ArrayOfJP_HotelContractType',
      'ArrayOfJP_Zone' => '\\ArrayOfJP_Zone',
      'ArrayOfJP_CityComplex' => '\\ArrayOfJP_CityComplex',
      'JP_CityComplex' => '\\JP_CityComplex',
      'JP_ZoneIdName' => '\\JP_ZoneIdName',
      'ArrayOfJP_FinalCustomerStaticData' => '\\ArrayOfJP_FinalCustomerStaticData',
      'JP_FinalCustomerStaticData' => '\\JP_FinalCustomerStaticData',
      'JP_FinalCustomerContactStaticData' => '\\JP_FinalCustomerContactStaticData',
      'JP_FinalCustomerAddressStaticData' => '\\JP_FinalCustomerAddressStaticData',
      'JP_AgencyList' => '\\JP_AgencyList',
      'JP_AgencyStaticData' => '\\JP_AgencyStaticData',
      'JP_AgencyGroup' => '\\JP_AgencyGroup',
      'ArrayOfJP_GenericCatalogueItem' => '\\ArrayOfJP_GenericCatalogueItem',
      'JP_GenericCatalogueItem' => '\\JP_GenericCatalogueItem',
      'ArrayOfJP_GenericCatalogueItemContent' => '\\ArrayOfJP_GenericCatalogueItemContent',
      'JP_GenericCatalogueItemContent' => '\\JP_GenericCatalogueItemContent',
      'ArrayOfJP_HotelSimpleInfo' => '\\ArrayOfJP_HotelSimpleInfo',
      'ArrayOfJP_ExtendedHotelInfo' => '\\ArrayOfJP_ExtendedHotelInfo',
      'JP_PackageList' => '\\JP_PackageList',
      'ArrayOfJP_PackagesCodeList' => '\\ArrayOfJP_PackagesCodeList',
      'JP_PackagesCodeList' => '\\JP_PackagesCodeList',
      'ArrayOfJP_RentacarLocationSimpleInfo' => '\\ArrayOfJP_RentacarLocationSimpleInfo',
      'JP_RentacarLocationSimpleInfo' => '\\JP_RentacarLocationSimpleInfo',
      'JP_PackageSearcherRS' => '\\JP_PackageSearcherRS',
      'ArrayOfJP_PackageSearcherItem' => '\\ArrayOfJP_PackageSearcherItem',
      'JP_PackageSearcherItem' => '\\JP_PackageSearcherItem',
      'ArrayOfJP_ProductSupplier' => '\\ArrayOfJP_ProductSupplier',
      'JP_ProductSupplier' => '\\JP_ProductSupplier',
      'JP_ServiceItemStaticData' => '\\JP_ServiceItemStaticData',
      'ArrayOfJP_InternalSupplier' => '\\ArrayOfJP_InternalSupplier',
      'JP_InternalSupplier' => '\\JP_InternalSupplier',
      'ArrayOfJP_ServiceCategory' => '\\ArrayOfJP_ServiceCategory',
      'JP_ServiceCategory' => '\\JP_ServiceCategory',
      'ArrayOfJP_ServiceType' => '\\ArrayOfJP_ServiceType',
      'JP_ServiceType' => '\\JP_ServiceType',
      'JP_TransferItemStaticData' => '\\JP_TransferItemStaticData',
      'ArrayOfJP_InternalSupplier1' => '\\ArrayOfJP_InternalSupplier1',
      'JP_VisaItemStaticData' => '\\JP_VisaItemStaticData',
      'ArrayOfJP_InternalSupplier2' => '\\ArrayOfJP_InternalSupplier2',
      'JP_MeetingPointList' => '\\JP_MeetingPointList',
      'ArrayOfJP_MeetingPointsZone' => '\\ArrayOfJP_MeetingPointsZone',
      'JP_MeetingPointsZone' => '\\JP_MeetingPointsZone',
      'ArrayOfJP_PackageCalendarPriceItems' => '\\ArrayOfJP_PackageCalendarPriceItems',
      'JP_PackageCalendarPriceItems' => '\\JP_PackageCalendarPriceItems',
      'JP_PackageCalendarPriceItem' => '\\JP_PackageCalendarPriceItem',
      'JP_HotelPortfolio' => '\\JP_HotelPortfolio',
      'FinalCustomerReadResponse' => '\\FinalCustomerReadResponse',
      'AgencyRead' => '\\AgencyRead',
      'JP_AgencyRead' => '\\JP_AgencyRead',
      'AgencyReadResponse' => '\\AgencyReadResponse',
      'SupplierList' => '\\SupplierList',
      'JP_SupplierListRQ' => '\\JP_SupplierListRQ',
      'JP_SupplierListRequest' => '\\JP_SupplierListRequest',
      'SupplierListResponse' => '\\SupplierListResponse',
      'GenericDataCatalogue' => '\\GenericDataCatalogue',
      'JP_GenericDataCatalogueRQ' => '\\JP_GenericDataCatalogueRQ',
      'JP_GenericDataCatalogueRequest' => '\\JP_GenericDataCatalogueRequest',
      'GenericDataCatalogueResponse' => '\\GenericDataCatalogueResponse',
      'ZoneList' => '\\ZoneList',
      'JP_ZoneListRQ' => '\\JP_ZoneListRQ',
      'JP_ZoneListRequest' => '\\JP_ZoneListRequest',
      'ZoneListResponse' => '\\ZoneListResponse',
      'CityList' => '\\CityList',
      'JP_CityListRQ' => '\\JP_CityListRQ',
      'CityListResponse' => '\\CityListResponse',
      'HotelCatalogueData' => '\\HotelCatalogueData',
      'JP_HotelCatalogueDataRQ' => '\\JP_HotelCatalogueDataRQ',
      'HotelCatalogueDataResponse' => '\\HotelCatalogueDataResponse',
      'HotelList' => '\\HotelList',
      'JP_HotelListRQ' => '\\JP_HotelListRQ',
      'JP_HotelListRequest' => '\\JP_HotelListRequest',
      'HotelListResponse' => '\\HotelListResponse',
      'HotelPortfolio' => '\\HotelPortfolio',
      'JP_HotelPortfolioRQ' => '\\JP_HotelPortfolioRQ',
      'HotelPortfolioResponse' => '\\HotelPortfolioResponse',
      'CruiseItinerary' => '\\CruiseItinerary',
      'JP_CruiseItineraryRQ' => '\\JP_CruiseItineraryRQ',
      'JP_CruiseItineraryRequest' => '\\JP_CruiseItineraryRequest',
      'JP_SearchSegmentsItinerary' => '\\JP_SearchSegmentsItinerary',
      'JP_SearchSegmentItinerary' => '\\JP_SearchSegmentItinerary',
      'CruiseItineraryResponse' => '\\CruiseItineraryResponse',
      'CruiseShip' => '\\CruiseShip',
      'JP_CruiseShipRQ' => '\\JP_CruiseShipRQ',
      'JP_CruiseShipRequest' => '\\JP_CruiseShipRequest',
      'JP_SearchSegmentsShip' => '\\JP_SearchSegmentsShip',
      'JP_SearchSegmentShip' => '\\JP_SearchSegmentShip',
      'CruiseShipResponse' => '\\CruiseShipResponse',
      'CruiseDataList' => '\\CruiseDataList',
      'JP_CruiseDataRQ' => '\\JP_CruiseDataRQ',
      'JP_CruiseDataRequest' => '\\JP_CruiseDataRequest',
      'CruiseDataListResponse' => '\\CruiseDataListResponse',
      'PackageList' => '\\PackageList',
      'JP_PackageListRQ' => '\\JP_PackageListRQ',
      'JP_PackageListRequest' => '\\JP_PackageListRequest',
      'PackageListResponse' => '\\PackageListResponse',
      'PackageCalendarPrice' => '\\PackageCalendarPrice',
      'JP_PackageCalendarPriceRQ' => '\\JP_PackageCalendarPriceRQ',
      'JP_PackageCalendarPriceParameter' => '\\JP_PackageCalendarPriceParameter',
      'PackageCalendarPriceResponse' => '\\PackageCalendarPriceResponse',
      'PackageSearcher' => '\\PackageSearcher',
      'JP_PackageSearcherRQ' => '\\JP_PackageSearcherRQ',
      'JP_PackageSearcherRequest' => '\\JP_PackageSearcherRequest',
      'PackageSearcherResponse' => '\\PackageSearcherResponse',
      'RentacarLocationList' => '\\RentacarLocationList',
      'JP_RentacarLocationListRQ' => '\\JP_RentacarLocationListRQ',
      'JP_RentacarLocationListRequest' => '\\JP_RentacarLocationListRequest',
      'RentacarLocationListResponse' => '\\RentacarLocationListResponse',
      'ServiceCatalogueData' => '\\ServiceCatalogueData',
      'JP_ServiceCatalogueDataRQ' => '\\JP_ServiceCatalogueDataRQ',
      'ServiceCatalogueDataResponse' => '\\ServiceCatalogueDataResponse',
      'TransferCatalogueData' => '\\TransferCatalogueData',
      'JP_TransferCatalogueDataRQ' => '\\JP_TransferCatalogueDataRQ',
      'TransferCatalogueDataResponse' => '\\TransferCatalogueDataResponse',
      'VisaCatalogueData' => '\\VisaCatalogueData',
      'JP_VisaCatalogueDataRQ' => '\\JP_VisaCatalogueDataRQ',
      'VisaCatalogueDataResponse' => '\\VisaCatalogueDataResponse',
      'MeetingPointList' => '\\MeetingPointList',
      'JP_MeetingPointListRQ' => '\\JP_MeetingPointListRQ',
      'JP_MeetingPointListRequest' => '\\JP_MeetingPointListRequest',
      'MeetingPointListResponse' => '\\MeetingPointListResponse',
      'HotelContent' => '\\HotelContent',
      'JP_HotelContentRQ' => '\\JP_HotelContentRQ',
      'ArrayOfJP_HotelSimpleContent' => '\\ArrayOfJP_HotelSimpleContent',
      'JP_HotelSimpleContent' => '\\JP_HotelSimpleContent',
      'JP_ContentRS' => '\\JP_ContentRS',
      'JP_Contents' => '\\JP_Contents',
      'JP_HotelContent' => '\\JP_HotelContent',
      'JP_SegmentHotel' => '\\JP_SegmentHotel',
      'JP_ContactInfo' => '\\JP_ContactInfo',
      'ArrayOfJP_Fax' => '\\ArrayOfJP_Fax',
      'JP_Fax' => '\\JP_Fax',
      'ArrayOfJP_Email' => '\\ArrayOfJP_Email',
      'JP_Email' => '\\JP_Email',
      'ArrayOfJP_Feature' => '\\ArrayOfJP_Feature',
      'JP_Feature' => '\\JP_Feature',
      'ArrayOfJP_PointOfInterest' => '\\ArrayOfJP_PointOfInterest',
      'JP_PointOfInterest' => '\\JP_PointOfInterest',
      'JP_HotelTimeInformation' => '\\JP_HotelTimeInformation',
      'JP_HotelCheckTime' => '\\JP_HotelCheckTime',
      'JP_PackageContent' => '\\JP_PackageContent',
      'ArrayOfJP_PackageZone' => '\\ArrayOfJP_PackageZone',
      'JP_PackageZone' => '\\JP_PackageZone',
      'ArrayOfJP_PackageDate' => '\\ArrayOfJP_PackageDate',
      'JP_PackageDate' => '\\JP_PackageDate',
      'ArrayOfJP_PriceFrom' => '\\ArrayOfJP_PriceFrom',
      'JP_PriceFrom' => '\\JP_PriceFrom',
      'HotelContentResponse' => '\\HotelContentResponse',
      'PackageContent' => '\\PackageContent',
      'JP_PackageContentRQ' => '\\JP_PackageContentRQ',
      'PackageContentResponse' => '\\PackageContentResponse',
      'RentacarLocationContent' => '\\RentacarLocationContent',
      'JP_RentacarLocationContentRQ' => '\\JP_RentacarLocationContentRQ',
      'ArrayOfJP_RentacarLocationSimpleContent' => '\\ArrayOfJP_RentacarLocationSimpleContent',
      'JP_RentacarLocationSimpleContent' => '\\JP_RentacarLocationSimpleContent',
      'RentacarLocationContentResponse' => '\\RentacarLocationContentResponse',
      'HotelCheckAvail' => '\\HotelCheckAvail',
      'JP_HotelCheckAvail' => '\\JP_HotelCheckAvail',
      'JP_HotelCheckAvailRequest' => '\\JP_HotelCheckAvailRequest',
      'JP_HotelOptionRequest' => '\\JP_HotelOptionRequest',
      'JP_CheckAvailRS' => '\\JP_CheckAvailRS',
      'JP_CheckAvailResults' => '\\JP_CheckAvailResults',
      'JP_CruiseCheckAvailResult' => '\\JP_CruiseCheckAvailResult',
      'JP_FlightCheckAvailResult' => '\\JP_FlightCheckAvailResult',
      'JP_FlightPriceInformation' => '\\JP_FlightPriceInformation',
      'JP_OptionalElements' => '\\JP_OptionalElements',
      'ArrayOfJP_CreditCardFee' => '\\ArrayOfJP_CreditCardFee',
      'JP_HotelCheckAvailResult' => '\\JP_HotelCheckAvailResult',
      'ArrayOfJP_HotelOptionCheckAvail' => '\\ArrayOfJP_HotelOptionCheckAvail',
      'JP_HotelOptionCheckAvail' => '\\JP_HotelOptionCheckAvail',
      'JP_InsuranceCheckAvailResult' => '\\JP_InsuranceCheckAvailResult',
      'JP_RentacarCheckAvailResult' => '\\JP_RentacarCheckAvailResult',
      'ArrayOfJP_RentacarCheckAvailOption' => '\\ArrayOfJP_RentacarCheckAvailOption',
      'JP_RentacarCheckAvailOption' => '\\JP_RentacarCheckAvailOption',
      'JP_ServiceCheckAvailResult' => '\\JP_ServiceCheckAvailResult',
      'JP_TransferCheckAvailResult' => '\\JP_TransferCheckAvailResult',
      'JP_VisaCheckAvailResult' => '\\JP_VisaCheckAvailResult',
      'HotelCheckAvailResponse' => '\\HotelCheckAvailResponse',
      'RentacarCheckAvail' => '\\RentacarCheckAvail',
      'JP_RentacarCheckAvailRQ' => '\\JP_RentacarCheckAvailRQ',
      'JP_RentacarCheckAvailRequest' => '\\JP_RentacarCheckAvailRequest',
      'JP_RentacarRequestCheckAvailOption' => '\\JP_RentacarRequestCheckAvailOption',
      'RentacarCheckAvailResponse' => '\\RentacarCheckAvailResponse',
      'InsuranceCheckAvail' => '\\InsuranceCheckAvail',
      'JP_InsuranceCheckAvail' => '\\JP_InsuranceCheckAvail',
      'JP_InsuranceCheckAvailRequest' => '\\JP_InsuranceCheckAvailRequest',
      'JP_InsuranceOptionRequest' => '\\JP_InsuranceOptionRequest',
      'InsuranceCheckAvailResponse' => '\\InsuranceCheckAvailResponse',
      'PackageCheckAvail' => '\\PackageCheckAvail',
      'JP_PackageCheckAvailRQ' => '\\JP_PackageCheckAvailRQ',
      'JP_PackageCheckAvailRequest' => '\\JP_PackageCheckAvailRequest',
      'PackageCheckAvailResponse' => '\\PackageCheckAvailResponse',
      'FlightCheckAvail' => '\\FlightCheckAvail',
      'JP_FlightCheckAvailRQ' => '\\JP_FlightCheckAvailRQ',
      'JP_FlightCheckAvailRequest' => '\\JP_FlightCheckAvailRequest',
      'JP_FlightOptionRequest' => '\\JP_FlightOptionRequest',
      'FlightCheckAvailResponse' => '\\FlightCheckAvailResponse',
      'CruiseCheckAvail' => '\\CruiseCheckAvail',
      'JP_CruiseCheckAvail' => '\\JP_CruiseCheckAvail',
      'JP_CruiseCheckAvailRequest' => '\\JP_CruiseCheckAvailRequest',
      'CruiseCheckAvailResponse' => '\\CruiseCheckAvailResponse',
      'ServiceCheckAvail' => '\\ServiceCheckAvail',
      'JP_ServiceCheckAvailRQ' => '\\JP_ServiceCheckAvailRQ',
      'JP_ServiceCheckAvailRequest' => '\\JP_ServiceCheckAvailRequest',
      'JP_ServiceOptionRQ' => '\\JP_ServiceOptionRQ',
      'ServiceCheckAvailResponse' => '\\ServiceCheckAvailResponse',
      'TransferCheckAvail' => '\\TransferCheckAvail',
      'JP_TransferCheckAvailRQ' => '\\JP_TransferCheckAvailRQ',
      'JP_TransferCheckAvailRequest' => '\\JP_TransferCheckAvailRequest',
      'JP_TransferOptionRQ' => '\\JP_TransferOptionRQ',
      'TransferCheckAvailResponse' => '\\TransferCheckAvailResponse',
      'VisaCheckAvail' => '\\VisaCheckAvail',
      'JP_VisaCheckAvailRQ' => '\\JP_VisaCheckAvailRQ',
      'JP_VisaCheckAvailRequest' => '\\JP_VisaCheckAvailRequest',
      'JP_VisaOptionRQ' => '\\JP_VisaOptionRQ',
      'VisaCheckAvailResponse' => '\\VisaCheckAvailResponse',
      'HotelBookingRules' => '\\HotelBookingRules',
      'JP_HotelBookingRuleRQ' => '\\JP_HotelBookingRuleRQ',
      'JP_HotelBookingRulesRequest' => '\\JP_HotelBookingRulesRequest',
      'JP_BookingRulesRS' => '\\JP_BookingRulesRS',
      'JP_BookingRules' => '\\JP_BookingRules',
      'JP_CruiseResultsBookingRules' => '\\JP_CruiseResultsBookingRules',
      'JP_FlightBookingRules' => '\\JP_FlightBookingRules',
      'JP_FlightRequiredFields' => '\\JP_FlightRequiredFields',
      'JP_HotelResultsBookingRules' => '\\JP_HotelResultsBookingRules',
      'ArrayOfJP_HotelOptionBookingRules' => '\\ArrayOfJP_HotelOptionBookingRules',
      'JP_HotelOptionBookingRules' => '\\JP_HotelOptionBookingRules',
      'JP_HotelRequiredFields' => '\\JP_HotelRequiredFields',
      'JP_HotelOptionalElements' => '\\JP_HotelOptionalElements',
      'ArrayOfJP_CreditCard' => '\\ArrayOfJP_CreditCard',
      'JP_CreditCard' => '\\JP_CreditCard',
      'JP_InsuranceBookingRules' => '\\JP_InsuranceBookingRules',
      'JP_InsuranceRequiredFields' => '\\JP_InsuranceRequiredFields',
      'JP_InsurancePriceInformation' => '\\JP_InsurancePriceInformation',
      'JP_PackageBookingRules' => '\\JP_PackageBookingRules',
      'JP_PackageRequiredFields' => '\\JP_PackageRequiredFields',
      'JP_PriceInformationPackage' => '\\JP_PriceInformationPackage',
      'JP_RentacarResultsBookingRules' => '\\JP_RentacarResultsBookingRules',
      'JP_RentacarRulesResult' => '\\JP_RentacarRulesResult',
      'ArrayOfJP_RentacarBookingRulesOption' => '\\ArrayOfJP_RentacarBookingRulesOption',
      'JP_RentacarBookingRulesOption' => '\\JP_RentacarBookingRulesOption',
      'JP_RentcarRequiredFields' => '\\JP_RentcarRequiredFields',
      'JP_RentacarPriceInformation' => '\\JP_RentacarPriceInformation',
      'JP_RentacarOptionalElements' => '\\JP_RentacarOptionalElements',
      'ArrayOfJP_RentacarLocationDetail' => '\\ArrayOfJP_RentacarLocationDetail',
      'JP_ServiceBookingRules' => '\\JP_ServiceBookingRules',
      'JP_ServiceRequiredFields' => '\\JP_ServiceRequiredFields',
      'JP_PriceInformationService' => '\\JP_PriceInformationService',
      'JP_TransferBookingRules' => '\\JP_TransferBookingRules',
      'JP_TransferRequiredFields' => '\\JP_TransferRequiredFields',
      'JP_PriceInformationTransfer' => '\\JP_PriceInformationTransfer',
      'JP_VisaBookingRules' => '\\JP_VisaBookingRules',
      'JP_VisaRequiredFields' => '\\JP_VisaRequiredFields',
      'JP_PriceInformationVisa' => '\\JP_PriceInformationVisa',
      'HotelBookingRulesResponse' => '\\HotelBookingRulesResponse',
      'RentacarBookingRules' => '\\RentacarBookingRules',
      'JP_RentacarBookingRulesRQ' => '\\JP_RentacarBookingRulesRQ',
      'JP_RentacarBookingRulesRequest' => '\\JP_RentacarBookingRulesRequest',
      'JP_RentacarRequestBookingRulesOption' => '\\JP_RentacarRequestBookingRulesOption',
      'JP_SearchSegmentsRentacarRules' => '\\JP_SearchSegmentsRentacarRules',
      'RentacarBookingRulesResponse' => '\\RentacarBookingRulesResponse',
      'FlightBookingRules' => '\\FlightBookingRules',
      'JP_FlightBookingRulesRQ' => '\\JP_FlightBookingRulesRQ',
      'JP_FlightBookingRulesRequest' => '\\JP_FlightBookingRulesRequest',
      'JP_FlightAssignSeats' => '\\JP_FlightAssignSeats',
      'JP_RelPaxesDist' => '\\JP_RelPaxesDist',
      'FlightBookingRulesResponse' => '\\FlightBookingRulesResponse',
      'InsuranceBookingRules' => '\\InsuranceBookingRules',
      'JP_InsuranceBookingRulesRQ' => '\\JP_InsuranceBookingRulesRQ',
      'JP_InsuranceBookingRulesRequest' => '\\JP_InsuranceBookingRulesRequest',
      'InsuranceBookingRulesResponse' => '\\InsuranceBookingRulesResponse',
      'PackageBookingRules' => '\\PackageBookingRules',
      'JP_PackageBookingRulesRQ' => '\\JP_PackageBookingRulesRQ',
      'JP_PackageBookingRuleRequest' => '\\JP_PackageBookingRuleRequest',
      'PackageBookingRulesResponse' => '\\PackageBookingRulesResponse',
      'CruiseBookingRules' => '\\CruiseBookingRules',
      'JP_CruiseBookingRulesRQ' => '\\JP_CruiseBookingRulesRQ',
      'JP_CruisesBookingRulesRequest' => '\\JP_CruisesBookingRulesRequest',
      'CruiseBookingRulesResponse' => '\\CruiseBookingRulesResponse',
      'ServiceBookingRules' => '\\ServiceBookingRules',
      'JP_ServiceBookingRulesRQ' => '\\JP_ServiceBookingRulesRQ',
      'JP_ServiceBookingRuleRequest' => '\\JP_ServiceBookingRuleRequest',
      'JP_ServiceRuleOptionRQ' => '\\JP_ServiceRuleOptionRQ',
      'ServiceBookingRulesResponse' => '\\ServiceBookingRulesResponse',
      'TransferBookingRules' => '\\TransferBookingRules',
      'JP_TransferBookingRulesRQ' => '\\JP_TransferBookingRulesRQ',
      'JP_TransferBookingRuleRequest' => '\\JP_TransferBookingRuleRequest',
      'JP_TransferRuleOptionRQ' => '\\JP_TransferRuleOptionRQ',
      'TransferBookingRulesResponse' => '\\TransferBookingRulesResponse',
      'VisaBookingRules' => '\\VisaBookingRules',
      'JP_VisaBookingRulesRQ' => '\\JP_VisaBookingRulesRQ',
      'JP_VisaBookingRuleRequest' => '\\JP_VisaBookingRuleRequest',
      'JP_VisaRuleOptionRQ' => '\\JP_VisaRuleOptionRQ',
      'VisaBookingRulesResponse' => '\\VisaBookingRulesResponse',
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
