<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/transactions', function(Request $request) {
    return response()->json(json_decode("{
    \"accounts\": [
        {
            \"accountId\": \"4163ef9a-4181-4fdd-aa24-76fd2097c30c\",
            \"institutionName\": \"Worldwide Savings Bank\",
            \"accountName\": \"HIGH INTEREST TFSA SAVINGS ACCOUNT\",
            \"transitNumber\": \"54685\",
            \"accountNumber\": \"123456781\",
            \"balance\": 67,
            \"balanceUpdated\": \"2017-02-22\"
        },
        {
            \"accountId\": \"6408eb5b-e410-4b35-a549-f96d24c2df2a\",
            \"institutionName\": \"Worldwide Savings Bank\",
            \"accountName\": \"COMPANION SAVINGS ACCOUNT\",
            \"transitNumber\": \"54685\",
            \"accountNumber\": \"123456780\",
            \"balance\": 14.1,
            \"balanceUpdated\": \"2017-02-22\"
        },
        {
            \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
            \"institutionName\": \"Worldwide Savings Bank\",
            \"accountName\": \"UNLIMITED CHEQUING ACCOUNT\",
            \"transitNumber\": \"54685\",
            \"accountNumber\": \"123456783\",
            \"balance\": 2027.46,
            \"balanceUpdated\": \"2017-02-22\"
        },
        {
            \"accountId\": \"c0f43f25-1b2e-453b-900b-4a7f6482d00a\",
            \"institutionName\": \"Worldwide Savings Bank\",
            \"accountName\": \"BORDERLESS PLAN\",
            \"transitNumber\": \"54685\",
            \"accountNumber\": \"123456782\",
            \"balance\": 9.79,
            \"balanceUpdated\": \"2017-02-22\"
        }
    ],
    \"transactionData\": {
        \"earliestTransactionDate\": \"2015-12-21\",
        \"latestTransactionDate\": \"2016-03-18\",
        \"daysSpanByTransaction\": 88,
        \"transactionCount\": 283,
        \"transactions\": [
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-18\",
                \"description\": \"Overdraft Protection Fee - Pay as you go MAR/16/2016\",
                \"amount\": -5,
                \"withdrawal\": 5,
                \"runningBalance\": 2027.46,
                \"category\": \"BANK_FEE\",
                \"transactionId\": \"d7853016-b74b-4afa-9dd7-6cf6a414b39e\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-18\",
                \"description\": \"CANADA FED\",
                \"amount\": 160,
                \"deposit\": 160,
                \"runningBalance\": 2032.46,
                \"category\": \"TAXES_GOVERNMENT_BENEFITS\",
                \"transactionId\": \"1e24af8f-3ca0-4be0-9c2d-a639c9751f7f\"
            },
            {
                \"accountId\": \"4163ef9a-4181-4fdd-aa24-76fd2097c30c\",
                \"transactionDate\": \"2016-03-17\",
                \"description\": \"Simply Save from TD UNLIMITED CHEQUING ACCOUNT xxxxxxx6623\",
                \"amount\": 48,
                \"deposit\": 48,
                \"runningBalance\": 67,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"dc8ffa65-c429-4757-8078-b26b5622963c\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-17\",
                \"description\": \"Overdraft Protection Fee - Pay as you go MAR/15/2016\",
                \"amount\": -5,
                \"withdrawal\": 5,
                \"runningBalance\": 2122.27,
                \"category\": \"BANK_FEE\",
                \"transactionId\": \"2b4e4b3a-7feb-4380-b2d2-8e1e7b8667eb\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-17\",
                \"description\": \"CANADA RIT\",
                \"amount\": 101.94,
                \"deposit\": 101.94,
                \"runningBalance\": 2127.27,
                \"category\": \"TAXES_GOVERNMENT_BENEFITS\",
                \"transactionId\": \"df59d661-7784-47ee-b718-98964c6f67bb\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-17\",
                \"description\": \"CORP. OF THE CO PAY\",
                \"amount\": 2304.2,
                \"deposit\": 2304.2,
                \"runningBalance\": 2025.33,
                \"category\": \"INCOME\",
                \"transactionId\": \"2a83e93e-a4b5-45f7-a812-cd47668f18ff\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-17\",
                \"description\": \"COFFEE LODGE _F\",
                \"amount\": -10.54,
                \"withdrawal\": 10.54,
                \"runningBalance\": 2057.64,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"0d32cdc6-0c68-486f-88bc-8210f806139f\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-17\",
                \"description\": \"WAL-MART #3082\",
                \"amount\": -185.18,
                \"withdrawal\": 185.18,
                \"runningBalance\": 1872.46,
                \"category\": \"DEPARTMENT_STORE\",
                \"transactionId\": \"fef5d52c-79cf-47c7-a082-476fa6ea74fb\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-17\",
                \"description\": \"TIM HORTONS #23 _F\",
                \"amount\": -6.09,
                \"withdrawal\": 6.09,
                \"runningBalance\": 2068.18,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"b422e6a4-4574-4141-abcd-cd2913dd1cda\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-17\",
                \"description\": \"Simply Save to HIGH INTEREST TFSA SAVINGS ACCOUNT xxxxxxx8155\",
                \"amount\": -48,
                \"withdrawal\": 48,
                \"runningBalance\": 2074.27,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"eb128147-e520-462b-bffb-88b365ebf800\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-16\",
                \"description\": \"CANADA TXD\",
                \"amount\": -102,
                \"withdrawal\": 102,
                \"runningBalance\": -278.87,
                \"transactionId\": \"869b3cf9-8271-42f2-befe-35ab81c1a8d5\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-16\",
                \"description\": \"Overdraft Protection Fee - Pay as you go MAR/14/2016\",
                \"amount\": -5,
                \"withdrawal\": 5,
                \"runningBalance\": -176.87,
                \"category\": \"BANK_FEE\",
                \"transactionId\": \"cc6364d5-31c6-4ebe-b9fe-6a1cf782d469\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-15\",
                \"description\": \"GLOBAL DONUTS L _F\",
                \"amount\": -11.21,
                \"withdrawal\": 11.21,
                \"runningBalance\": -134.58,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"3a814f2f-3d5a-4a8b-b31f-90af3449fc2b\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-15\",
                \"description\": \"Sharkys MSP\",
                \"amount\": -37.29,
                \"withdrawal\": 37.29,
                \"runningBalance\": -171.87,
                \"transactionId\": \"b18b7b3f-c67e-444b-8d37-51686a29b944\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-14\",
                \"description\": \"TIM HORTONS #23 _F\",
                \"amount\": -3.8,
                \"withdrawal\": 3.8,
                \"runningBalance\": 217.71,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"e5baf1a1-d860-4564-ae91-1b08ec17fc12\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-14\",
                \"description\": \"TIM HORTONS #19 _F\",
                \"amount\": -1.9,
                \"withdrawal\": 1.9,
                \"runningBalance\": 215.81,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"d49cb07e-6ebe-430c-a771-668479b3aa14\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-14\",
                \"description\": \"DOLLARAMA # 247\",
                \"amount\": -4.83,
                \"withdrawal\": 4.83,
                \"runningBalance\": 210.98,
                \"category\": \"THRIFT_SHOP\",
                \"transactionId\": \"547f1e36-27f0-49a7-8c28-44debe4d5611\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-14\",
                \"description\": \"MCLACHLAN FAMIL _F\",
                \"amount\": -13.5,
                \"withdrawal\": 13.5,
                \"runningBalance\": 197.48,
                \"transactionId\": \"632e4425-7444-48f3-bb60-793bd5803738\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-14\",
                \"description\": \"MCLACHLAN FAMIL _F\",
                \"amount\": -10.5,
                \"withdrawal\": 10.5,
                \"runningBalance\": 186.98,
                \"transactionId\": \"81883b15-0bf4-4594-a75c-9364eb957c94\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-14\",
                \"description\": \"View Cheque CHQ#xxxxx-xxxxxx4461 00190 **1564461\",
                \"amount\": -80,
                \"withdrawal\": 80,
                \"runningBalance\": 106.98,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"118841de-1eef-4112-af66-f3cba1ae3d07\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-14\",
                \"description\": \"View Cheque CHQ#xxxxx-xxxxxx4464 00188 **1564464\",
                \"amount\": -107,
                \"withdrawal\": 107,
                \"runningBalance\": -0.02,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"b521d40a-e7d6-4965-b8ee-cd267fc0abe0\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-14\",
                \"description\": \"BREAD MAN\",
                \"amount\": -3.35,
                \"withdrawal\": 3.35,
                \"runningBalance\": -3.37,
                \"category\": \"GROCERY\",
                \"transactionId\": \"e239255d-6f51-40de-a3cf-e3cea7705708\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-14\",
                \"description\": \"View Cheque CHQ#xxxxx-xxxxxx4458 00189 **1564458\",
                \"amount\": -120,
                \"withdrawal\": 120,
                \"runningBalance\": -123.37,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"83a95ef1-d657-4fc8-9941-ccd6c22bd408\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-11\",
                \"description\": \"DOLLAR TREE #40 _F\",
                \"amount\": -7.4,
                \"withdrawal\": 7.4,
                \"runningBalance\": 239.25,
                \"category\": \"THRIFT_SHOP\",
                \"transactionId\": \"d8e622c9-4981-467a-b36c-6fe0a30af23d\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-11\",
                \"description\": \"GLOBAL DONUTS L _F\",
                \"amount\": -17.74,
                \"withdrawal\": 17.74,
                \"runningBalance\": 221.51,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"708b50c6-1f13-4462-90ee-ff0f4c12c16c\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-10\",
                \"description\": \"SCOTIA DEALER A APY\",
                \"amount\": -278.79,
                \"withdrawal\": 278.79,
                \"runningBalance\": 246.65,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"3e8d0c1c-fc7b-4b1e-aff1-15afa84d0885\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-10\",
                \"description\": \"PITA PIT - 191\",
                \"amount\": -7.92,
                \"withdrawal\": 7.92,
                \"runningBalance\": 525.44,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"96f45208-eae6-41ab-9b38-4f69b27556f7\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-09\",
                \"description\": \"Interac e-Transfer C0***AuK\",
                \"amount\": -207.36,
                \"withdrawal\": 207.36,
                \"runningBalance\": 534.86,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"529387c9-c317-4515-84f6-775a45422551\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-09\",
                \"description\": \"Interac e-Transfer Fee\",
                \"amount\": -1.5,
                \"withdrawal\": 1.5,
                \"runningBalance\": 533.36,
                \"category\": \"BANK_FEE\",
                \"transactionId\": \"70f43cbf-79ab-4f2b-9544-20e1038fbf1b\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-08\",
                \"description\": \"NON-TD ATM W/D\",
                \"amount\": -62,
                \"withdrawal\": 62,
                \"runningBalance\": 742.22,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"efd303a1-df3a-476a-9e62-7497200937eb\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-08\",
                \"description\": \"FOODLAND #6336\",
                \"amount\": -13.84,
                \"withdrawal\": 13.84,
                \"runningBalance\": 808.28,
                \"category\": \"GROCERY\",
                \"transactionId\": \"6e66c516-5761-4ad3-92bc-88ef41db9311\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-08\",
                \"description\": \"TIM HORTONS #23 _F\",
                \"amount\": -4.06,
                \"withdrawal\": 4.06,
                \"runningBalance\": 804.22,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"b08b0f13-b9b8-40c4-910e-af2cf52ea6cf\"
            },
            {
                \"accountId\": \"4163ef9a-4181-4fdd-aa24-76fd2097c30c\",
                \"transactionDate\": \"2016-03-07\",
                \"description\": \"SCOTIA VISA Q3U6A6\",
                \"amount\": -100,
                \"withdrawal\": 100,
                \"runningBalance\": 19,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"dee640aa-e0d9-400c-8e27-5214e4757922\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-07\",
                \"description\": \"JOHNSON/UNIFUND INS\",
                \"amount\": -140,
                \"withdrawal\": 140,
                \"runningBalance\": 1271.77,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"ff90ec28-c6ba-449b-be95-c9fdbff327be\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-07\",
                \"description\": \"Transfer to Personal Payee DOMEMIC Q3U5Z7\",
                \"amount\": -400,
                \"withdrawal\": 400,
                \"runningBalance\": 2033.34,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"1f4eaeee-0ebb-4622-98fb-37598fe3d51c\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-07\",
                \"description\": \"SHOPPERS DRUG M\",
                \"amount\": -18.67,
                \"withdrawal\": 18.67,
                \"runningBalance\": 2014.67,
                \"category\": \"PHARMACY\",
                \"transactionId\": \"189a1b2e-1501-4717-af48-26022662e839\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-07\",
                \"description\": \"TDMASTERCARD Q3U6A2\",
                \"amount\": -100,
                \"withdrawal\": 100,
                \"runningBalance\": 1914.67,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"931aa51c-cb6b-4798-81c0-75e145463337\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-07\",
                \"description\": \"President's Choice MasterCard Q3U5Z8\",
                \"amount\": -400,
                \"withdrawal\": 400,
                \"runningBalance\": 1514.67,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"85bde3f0-b9f4-4672-8a75-016333923e12\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-07\",
                \"description\": \"METRO #240 _F\",
                \"amount\": -17.56,
                \"withdrawal\": 17.56,
                \"runningBalance\": 1497.11,
                \"category\": \"GROCERY\",
                \"transactionId\": \"985a974a-61e2-4686-a6b0-94bf8416b701\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-07\",
                \"description\": \"COFFEE LODGE-FI\",
                \"amount\": -14.19,
                \"withdrawal\": 14.19,
                \"runningBalance\": 1482.92,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"bc05d17a-f43b-4d64-86bb-c452f6433c9f\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-07\",
                \"description\": \"TIM HORTONS #23 _F\",
                \"amount\": -6.08,
                \"withdrawal\": 6.08,
                \"runningBalance\": 1476.84,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"165124b9-17d6-4bd2-b6d6-4b6cd83ac85c\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-07\",
                \"description\": \"SEARS CANADA #1\",
                \"amount\": -65.07,
                \"withdrawal\": 65.07,
                \"runningBalance\": 1411.77,
                \"category\": \"DEPARTMENT_STORE\",
                \"transactionId\": \"f6da3214-ecee-41df-8379-5eb3ad0797e0\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-07\",
                \"description\": \"PIONEER STN #24\",
                \"amount\": -53.57,
                \"withdrawal\": 53.57,
                \"runningBalance\": 1218.2,
                \"category\": \"TRANSPORTATION\",
                \"transactionId\": \"b4021881-c74d-4fbc-8b7d-f0064799fa45\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-07\",
                \"description\": \"Fit4less MSP\",
                \"amount\": -9.9,
                \"withdrawal\": 9.9,
                \"runningBalance\": 1208.3,
                \"transactionId\": \"1524905c-201b-4a5f-b268-cca2a3bff856\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-07\",
                \"description\": \"PAYPAL PTE LTD MSP\",
                \"amount\": -7.99,
                \"withdrawal\": 7.99,
                \"runningBalance\": 1200.31,
                \"transactionId\": \"6fffe9ce-02e0-4e82-b360-cec3e9b0796c\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-07\",
                \"description\": \"Real Canadian Superstore MURPHY ROA\",
                \"amount\": -66.26,
                \"withdrawal\": 66.26,
                \"runningBalance\": 1134.05,
                \"category\": \"GROCERY\",
                \"transactionId\": \"f24d8513-cfc0-4c93-8ebd-ca8f49ee084c\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-07\",
                \"description\": \"CARTER'S OSHKOS\",
                \"amount\": -133.39,
                \"withdrawal\": 133.39,
                \"runningBalance\": 1000.66,
                \"category\": \"CHILDREN\",
                \"transactionId\": \"b7576bcd-17d6-4c84-829e-fc91f930f023\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-07\",
                \"description\": \"TAX TYME ACCOUN\",
                \"amount\": -178.54,
                \"withdrawal\": 178.54,
                \"runningBalance\": 822.12,
                \"category\": \"TAXES_GOVERNMENT_BENEFITS\",
                \"transactionId\": \"d774a312-2f8e-4cd4-9b80-f095439736fc\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-04\",
                \"description\": \"COFFEE LODGE _F\",
                \"amount\": -14.19,
                \"withdrawal\": 14.19,
                \"runningBalance\": 2433.34,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"6ea03942-ec8d-4896-a6f4-1b70e6695e8d\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-04\",
                \"description\": \"TIM HORTONS #23 _F\",
                \"amount\": -6.08,
                \"withdrawal\": 6.08,
                \"runningBalance\": 2447.53,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"64b8ad4a-1402-405f-9ae4-10ed767ddd19\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-04\",
                \"description\": \"Telus Mobility/Mobilite L8L4K8\",
                \"amount\": -75,
                \"withdrawal\": 75,
                \"runningBalance\": 2453.61,
                \"category\": \"UTILITIES_BILLS\",
                \"transactionId\": \"5e2415a4-2a4c-4929-bde0-46df29ebff05\"
            },
            {
                \"accountId\": \"4163ef9a-4181-4fdd-aa24-76fd2097c30c\",
                \"transactionDate\": \"2016-03-03\",
                \"description\": \"Simply Save from TD UNLIMITED CHEQUING ACCOUNT xxxxxxx6623\",
                \"amount\": 64,
                \"deposit\": 64,
                \"runningBalance\": 119,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"088ffd7a-4394-4976-a760-a4e282bea438\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-03\",
                \"description\": \"Simply Save to HIGH INTEREST TFSA SAVINGS ACCOUNT xxxxxxx8155\",
                \"amount\": -64,
                \"withdrawal\": 64,
                \"runningBalance\": 2528.61,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"b9bb8d28-f20c-46d3-a1e8-1011e29f7a45\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-03\",
                \"description\": \"CORP. OF THE CO PAY\",
                \"amount\": 2552.43,
                \"deposit\": 2552.43,
                \"runningBalance\": 2592.61,
                \"category\": \"INCOME\",
                \"transactionId\": \"d62ffe9e-0f15-4fea-9d21-54fe471718c9\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-02\",
                \"description\": \"FOOD BASICS #86 _F\",
                \"amount\": -21.71,
                \"withdrawal\": 21.71,
                \"runningBalance\": 121.38,
                \"category\": \"GROCERY\",
                \"transactionId\": \"cb8d2911-b3b5-495c-9998-b4bd13a414ef\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-02\",
                \"description\": \"FIVE GUYS BURGE _F\",
                \"amount\": -15.79,
                \"withdrawal\": 15.79,
                \"runningBalance\": 105.59,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"c2f4c8e2-4227-46f6-a8c3-9c397523aaa7\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-02\",
                \"description\": \"Real Canadian Superstore MURPHY ROA _F\",
                \"amount\": -34.39,
                \"withdrawal\": 34.39,
                \"runningBalance\": 71.2,
                \"category\": \"GROCERY\",
                \"transactionId\": \"87e304b0-c480-44ed-8cd7-b3a686f26d55\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-02\",
                \"description\": \"ITALIA PIZZERIA\",
                \"amount\": -31.02,
                \"withdrawal\": 31.02,
                \"runningBalance\": 40.18,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"8231dbd7-f3ed-41c7-8c2f-0a2ce3206e47\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-02\",
                \"description\": \"TD ATM W/D xx3867\",
                \"amount\": -40,
                \"withdrawal\": 40,
                \"runningBalance\": 143.09,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"56255aa6-208f-417e-8f7e-e7b8b55d4eef\"
            },
            {
                \"accountId\": \"6408eb5b-e410-4b35-a549-f96d24c2df2a\",
                \"transactionDate\": \"2016-03-01\",
                \"description\": \"Pre-authorized Transfer from xxxxxxx6623\",
                \"amount\": 15,
                \"deposit\": 15,
                \"runningBalance\": 14.1,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"5ec62ed9-6b8a-40c9-bba5-7e22bda16204\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-01\",
                \"description\": \"Pre-authorized Transfer to xxxxxxx6640\",
                \"amount\": -15,
                \"withdrawal\": 15,
                \"runningBalance\": 275.19,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"d9622401-51ff-43c4-a758-174094132663\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-01\",
                \"description\": \"CLA INSURANCE INS\",
                \"amount\": -16.88,
                \"withdrawal\": 16.88,
                \"runningBalance\": 290.19,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"c65717d7-2a0b-4d15-963e-3a1a1709c008\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-01\",
                \"description\": \"PYT+INS: xxxxxxx5719\",
                \"amount\": -51.72,
                \"withdrawal\": 51.72,
                \"runningBalance\": 307.07,
                \"transactionId\": \"f9750314-47e6-491d-a701-efe22aa293f5\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-01\",
                \"description\": \"COGECO CABLE CA BPY\",
                \"amount\": -90.6,
                \"withdrawal\": 90.6,
                \"runningBalance\": 183.09,
                \"category\": \"UTILITIES_BILLS\",
                \"transactionId\": \"a35fbb6f-5763-43da-8f79-46d8ce1788d7\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-03-01\",
                \"description\": \"Interac e-Transfer Fee\",
                \"amount\": -1.5,
                \"withdrawal\": 1.5,
                \"runningBalance\": 273.69,
                \"category\": \"BANK_FEE\",
                \"transactionId\": \"6851100d-8081-4265-89aa-709fed2dcca9\"
            },
            {
                \"accountId\": \"4163ef9a-4181-4fdd-aa24-76fd2097c30c\",
                \"transactionDate\": \"2016-02-29\",
                \"description\": \"INTEREST CREDIT\",
                \"amount\": 0.02,
                \"deposit\": 0.02,
                \"runningBalance\": 54.97,
                \"category\": \"INCOME\",
                \"transactionId\": \"d20e0a84-11ba-4622-a217-bee71eae97d8\"
            },
            {
                \"accountId\": \"4163ef9a-4181-4fdd-aa24-76fd2097c30c\",
                \"transactionDate\": \"2016-02-29\",
                \"description\": \"BONUS INTEREST\",
                \"amount\": 0.03,
                \"deposit\": 0.03,
                \"runningBalance\": 55,
                \"category\": \"INCOME\",
                \"transactionId\": \"35750cec-a1c5-4e4a-a3a6-76f3fd1ed152\"
            },
            {
                \"accountId\": \"6408eb5b-e410-4b35-a549-f96d24c2df2a\",
                \"transactionDate\": \"2016-02-29\",
                \"description\": \"OTHER BANK FEES\",
                \"amount\": -1.25,
                \"withdrawal\": 1.25,
                \"runningBalance\": -0.9,
                \"category\": \"BANK_FEE\",
                \"transactionId\": \"9de9c01f-fcc0-4430-ba77-9379090c209c\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-29\",
                \"description\": \"PAYPAL PTE LTD MSP\",
                \"amount\": -25,
                \"withdrawal\": 25,
                \"runningBalance\": 1252.85,
                \"transactionId\": \"37b8951a-ee65-47ec-9fe1-1d41addf479d\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-29\",
                \"description\": \"WINE RACK 83 _F\",
                \"amount\": -10.25,
                \"withdrawal\": 10.25,
                \"runningBalance\": 1242.6,
                \"category\": \"ENTERTAINMENT\",
                \"transactionId\": \"635afe0b-4cdb-44ae-8238-685d9d6bc81a\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-29\",
                \"description\": \"Real Canadian Superstore MURPHY ROA\",
                \"amount\": -171,
                \"withdrawal\": 171,
                \"runningBalance\": 1071.6,
                \"category\": \"GROCERY\",
                \"transactionId\": \"b1f26179-1834-49e3-9fc6-b6da3f23d4da\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-29\",
                \"description\": \"MONTHLY ACCOUNT FEE\",
                \"amount\": -14.95,
                \"withdrawal\": 14.95,
                \"runningBalance\": 1056.65,
                \"category\": \"BANK_FEE\",
                \"transactionId\": \"8692684c-a9e6-440d-be9d-74dd48dda3f3\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-29\",
                \"description\": \"OTHER BANK FEES\",
                \"amount\": -4.5,
                \"withdrawal\": 4.5,
                \"runningBalance\": 1052.15,
                \"category\": \"BANK_FEE\",
                \"transactionId\": \"cc6aba6a-4787-4cde-95c5-585bae79611a\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-29\",
                \"description\": \"National Student Loan Services Centre MSP\",
                \"amount\": -483.36,
                \"withdrawal\": 483.36,
                \"runningBalance\": 568.79,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"8607a35a-ae1f-4ffa-9fb3-4a8c75137b5e\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-29\",
                \"description\": \"RBC FTD\",
                \"amount\": -210,
                \"withdrawal\": 210,
                \"runningBalance\": 358.79,
                \"transactionId\": \"fa58039e-9a90-4092-b2cb-96560bd8cbad\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-29\",
                \"description\": \"METRO #364 _F\",
                \"amount\": -5.99,
                \"withdrawal\": 5.99,
                \"runningBalance\": 1277.85,
                \"category\": \"GROCERY\",
                \"transactionId\": \"d304f5fd-7d42-4426-995a-97f578181e44\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-29\",
                \"description\": \"Interac e-Transfer C0***mhf\",
                \"amount\": -39.16,
                \"withdrawal\": 39.16,
                \"runningBalance\": 1283.84,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"b25525f8-5249-4e6e-90fc-d2b2c7131da0\"
            },
            {
                \"accountId\": \"c0f43f25-1b2e-453b-900b-4a7f6482d00a\",
                \"transactionDate\": \"2016-02-29\",
                \"description\": \"MONTHLY ACCOUNT FEE\",
                \"amount\": -4.95,
                \"withdrawal\": 4.95,
                \"runningBalance\": 9.79,
                \"category\": \"BANK_FEE\",
                \"transactionId\": \"5fb5c166-551e-45fd-91ed-25a88b11ab3e\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-26\",
                \"description\": \"SCOTIA VISA J7Q9Y9\",
                \"amount\": -100,
                \"withdrawal\": 100,
                \"runningBalance\": 1358.63,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"b505e2b1-22a7-43e0-87c0-5a8a91320c06\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-26\",
                \"description\": \"COFFEE CULTURE\",
                \"amount\": -7.91,
                \"withdrawal\": 7.91,
                \"runningBalance\": 1458.63,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"c2e435a0-09ff-4b1d-81f1-16891f67241f\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-26\",
                \"description\": \"METRO #240\",
                \"amount\": -35.63,
                \"withdrawal\": 35.63,
                \"runningBalance\": 1323,
                \"category\": \"GROCERY\",
                \"transactionId\": \"2571e7c9-748e-441b-b1f3-87d18950a6f2\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-25\",
                \"description\": \"SCOTIA DEALER A APY\",
                \"amount\": -278.79,
                \"withdrawal\": 278.79,
                \"runningBalance\": 1466.54,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"027ccb0d-740c-4208-8966-3fb9ce48cc2c\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-24\",
                \"description\": \"TIM HORTONS #02 _F\",
                \"amount\": -1.9,
                \"withdrawal\": 1.9,
                \"runningBalance\": 1745.33,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"74a11ef1-c48b-47ec-8241-8c905fd7dea9\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-23\",
                \"description\": \"NON-TD ATM W/D\",
                \"amount\": -43,
                \"withdrawal\": 43,
                \"runningBalance\": 1875.39,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"280096cb-f14b-40c8-99dc-d415a3dd5e7c\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-23\",
                \"description\": \"TD ATM W/D xx1110\",
                \"amount\": -40,
                \"withdrawal\": 40,
                \"runningBalance\": 1923.05,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"81af4098-ad21-45df-bac1-ac63d8aaf624\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-23\",
                \"description\": \"TIM HORTONS #23 _F\",
                \"amount\": -4.66,
                \"withdrawal\": 4.66,
                \"runningBalance\": 1918.39,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"fa5836c3-6697-4203-9f8d-a42d391b21e8\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-23\",
                \"description\": \"MEIJER INC 90.45_V\",
                \"amount\": -128.16,
                \"withdrawal\": 128.16,
                \"runningBalance\": 1747.23,
                \"category\": \"GROCERY\",
                \"transactionId\": \"bd84c4d6-864f-4def-a34e-6683050be3d9\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-22\",
                \"description\": \"TIM HORTONS #23 _F\",
                \"amount\": -3.8,
                \"withdrawal\": 3.8,
                \"runningBalance\": 2064.77,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"a61afe73-f772-4703-9aa0-92b35aa72b20\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-22\",
                \"description\": \"KEN'S VALU-MART\",
                \"amount\": -60.67,
                \"withdrawal\": 60.67,
                \"runningBalance\": 2068.57,
                \"transactionId\": \"d5c40229-4d0c-41b1-9d71-59cf47148d4d\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-22\",
                \"description\": \"TIM HORTONS #05 _F\",
                \"amount\": -3.6,
                \"withdrawal\": 3.6,
                \"runningBalance\": 1963.05,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"e85eb45b-a298-4352-8ad2-4fbfda8ce083\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-22\",
                \"description\": \"TIM HORTONS #23 _F\",
                \"amount\": -6.09,
                \"withdrawal\": 6.09,
                \"runningBalance\": 2058.68,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"a86b96c0-0811-47a6-b27a-a9faaec5ee94\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-22\",
                \"description\": \"TIM HORTONS #00 _F\",
                \"amount\": -12.63,
                \"withdrawal\": 12.63,
                \"runningBalance\": 2046.05,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"18aac15c-f82c-49d2-be80-c6e106eb86e4\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-22\",
                \"description\": \"MAC'S GAS PUMPS\",
                \"amount\": -69.5,
                \"withdrawal\": 69.5,
                \"runningBalance\": 1976.55,
                \"category\": \"TRANSPORTATION\",
                \"transactionId\": \"cd404e8d-43df-4b7a-a3af-9ccb4460b4ea\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-22\",
                \"description\": \"Fit4less MSP\",
                \"amount\": -9.9,
                \"withdrawal\": 9.9,
                \"runningBalance\": 1966.65,
                \"transactionId\": \"9229a622-73dd-4d9c-b507-a24ff39c78a3\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-19\",
                \"description\": \"NON-TD ATM W/D\",
                \"amount\": -163,
                \"withdrawal\": 163,
                \"runningBalance\": 2151,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"62cd8fd2-0e16-4c8c-b664-69ee300978e9\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-19\",
                \"description\": \"TIM HORTONS #02 _F\",
                \"amount\": -1.9,
                \"withdrawal\": 1.9,
                \"runningBalance\": 2149.1,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"b504e760-ef73-4b6c-9046-25a3dcc7ce42\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-19\",
                \"description\": \"DAVY JONES QUAL\",
                \"amount\": -19.86,
                \"withdrawal\": 19.86,
                \"runningBalance\": 2129.24,
                \"transactionId\": \"c841821d-f49e-468f-a493-a8b995bf8fea\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-19\",
                \"description\": \"CANADA FED\",
                \"amount\": 160,
                \"deposit\": 160,
                \"runningBalance\": 2353.68,
                \"category\": \"TAXES_GOVERNMENT_BENEFITS\",
                \"transactionId\": \"b2720d78-4ced-4f00-9c69-939695559914\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-19\",
                \"description\": \"TIM HORTONS #17 _F\",
                \"amount\": -4.66,
                \"withdrawal\": 4.66,
                \"runningBalance\": 2349.02,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"34d5556b-18e4-45fe-a936-444cbc19e720\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-19\",
                \"description\": \"GOODWILL INDUST\",
                \"amount\": -30,
                \"withdrawal\": 30,
                \"runningBalance\": 2319.02,
                \"category\": \"THRIFT_SHOP\",
                \"transactionId\": \"acfb2939-e334-4d0c-a891-9480d77603ca\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-19\",
                \"description\": \"SUNRIPE FARMS P _F\",
                \"amount\": -5.02,
                \"withdrawal\": 5.02,
                \"runningBalance\": 2314,
                \"transactionId\": \"661f8b75-c440-4578-88eb-d6f5b4b088d1\"
            },
            {
                \"accountId\": \"c0f43f25-1b2e-453b-900b-4a7f6482d00a\",
                \"transactionDate\": \"2016-02-19\",
                \"description\": \"Payment to TD Credit Card\",
                \"amount\": -100,
                \"withdrawal\": 100,
                \"runningBalance\": 14.74,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"2f4f3287-4429-40d3-8945-084857a80ceb\"
            },
            {
                \"accountId\": \"4163ef9a-4181-4fdd-aa24-76fd2097c30c\",
                \"transactionDate\": \"2016-02-18\",
                \"description\": \"Simply Save from TD UNLIMITED CHEQUING ACCOUNT xxxxxxx6623\",
                \"amount\": 54,
                \"deposit\": 54,
                \"runningBalance\": 54.95,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"0ac7daac-6f8c-4d05-84a0-4de493a02406\"
            },
            {
                \"accountId\": \"6408eb5b-e410-4b35-a549-f96d24c2df2a\",
                \"transactionDate\": \"2016-02-18\",
                \"description\": \"President's Choice MasterCard A3A6Y8\",
                \"amount\": -105,
                \"withdrawal\": 105,
                \"runningBalance\": 0.35,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"e06dcd7f-dcda-4838-8836-134d4724cfd6\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-18\",
                \"description\": \"CORP. OF THE CO PAY\",
                \"amount\": 1951.68,
                \"deposit\": 1951.68,
                \"runningBalance\": 2670.08,
                \"category\": \"INCOME\",
                \"transactionId\": \"c08f6fb8-10d7-471d-b983-32d2bdb8b9a8\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-18\",
                \"description\": \"IKEA BURLINGTON _F\",
                \"amount\": -14.65,
                \"withdrawal\": 14.65,
                \"runningBalance\": 2193.68,
                \"category\": \"HOME\",
                \"transactionId\": \"1b6fff4d-43df-4e7e-83fc-ce5cb16d40ec\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-18\",
                \"description\": \"WESTMOUNT HUSKY\",
                \"amount\": -47.5,
                \"withdrawal\": 47.5,
                \"runningBalance\": 2208.33,
                \"category\": \"TRANSPORTATION\",
                \"transactionId\": \"a89db3dc-8b49-4a36-8bb5-849068794ba2\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-18\",
                \"description\": \"IKEA BURLINGTON\",
                \"amount\": -68.82,
                \"withdrawal\": 68.82,
                \"runningBalance\": 2295.83,
                \"category\": \"HOME\",
                \"transactionId\": \"0365e708-f192-4b28-8465-c579511c6cbc\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-18\",
                \"description\": \"EMPRESS OF INDI\",
                \"amount\": -49,
                \"withdrawal\": 49,
                \"runningBalance\": 2364.65,
                \"transactionId\": \"8b00d396-c8b9-41cb-a765-e44a07fcf12c\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-18\",
                \"description\": \"Simply Save to HIGH INTEREST TFSA SAVINGS ACCOUNT xxxxxxx8155\",
                \"amount\": -54,
                \"withdrawal\": 54,
                \"runningBalance\": 2413.65,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"cd8d57ed-3870-4dc9-b7f4-30a830af02b6\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-18\",
                \"description\": \"TIM HORTONS #23 _F\",
                \"amount\": -2.43,
                \"withdrawal\": 2.43,
                \"runningBalance\": 2467.65,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"1be6933b-90ed-44f7-9fb1-45e5189d2b39\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-18\",
                \"description\": \"Transfer to TD Credit Card IQ020\",
                \"amount\": -100,
                \"withdrawal\": 100,
                \"runningBalance\": 2470.08,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"eeae32bd-8553-4e2d-abe6-42f45e4683ae\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-18\",
                \"description\": \"View Cheque CHQ#xxxxx-xxxxxx5025 00187 **1865025\",
                \"amount\": -40,
                \"withdrawal\": 40,
                \"runningBalance\": 2255.83,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"ded8f314-1c20-4301-8db3-fc11c2b8194f\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-18\",
                \"description\": \"SCOTIA VISA A3A6Y9\",
                \"amount\": -100,
                \"withdrawal\": 100,
                \"runningBalance\": 2570.08,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"9a6f3e39-3936-4041-9bb5-7f5ab944869f\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-17\",
                \"description\": \"KEN'S VALU-MART\",
                \"amount\": -56.32,
                \"withdrawal\": 56.32,
                \"runningBalance\": 718.4,
                \"transactionId\": \"a2ec04f1-244d-4a3c-b2c3-e0254c154414\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-16\",
                \"description\": \"TIM HORTONS #09 _F\",
                \"amount\": -3.8,
                \"withdrawal\": 3.8,
                \"runningBalance\": 1636.21,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"fb582781-0c42-4cde-826f-f23744766d35\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-16\",
                \"description\": \"7-ELEVEN #x7608 _F\",
                \"amount\": -11.5,
                \"withdrawal\": 11.5,
                \"runningBalance\": 774.72,
                \"category\": \"CONVENIENCE_STORE\",
                \"transactionId\": \"973262a6-5e81-4e16-b31b-45493743ee9d\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-16\",
                \"description\": \"COFFEE CULTURE\",
                \"amount\": -7.46,
                \"withdrawal\": 7.46,
                \"runningBalance\": 786.22,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"c88c316e-4238-40de-a8db-c0c1bc4a1338\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-16\",
                \"description\": \"TIM HORTONS #02 _F\",
                \"amount\": -3.26,
                \"withdrawal\": 3.26,
                \"runningBalance\": 793.68,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"2d445b9c-299c-4146-8d80-4ccc0efa2194\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-16\",
                \"description\": \"TIM HORTONS #32 _F\",
                \"amount\": -4.93,
                \"withdrawal\": 4.93,
                \"runningBalance\": 796.94,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"47c15b24-b9fd-47ce-ba45-115fa9b8dd81\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-16\",
                \"description\": \"Sharkys MSP\",
                \"amount\": -37.29,
                \"withdrawal\": 37.29,
                \"runningBalance\": 801.87,
                \"transactionId\": \"a4510689-453b-46dd-97de-54baa24acf0c\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-16\",
                \"description\": \"TIM HORTONS #23 _F\",
                \"amount\": -2.94,
                \"withdrawal\": 2.94,
                \"runningBalance\": 839.16,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"d8e18cac-cb43-4dfd-922f-27e417fb0e15\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-16\",
                \"description\": \"View Cheque CHQ#xxxxx-xxxxxx9522 00185 **0399522\",
                \"amount\": -200,
                \"withdrawal\": 200,
                \"runningBalance\": 842.1,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"d117cfee-3197-4c57-b794-e05527e9f8e0\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-16\",
                \"description\": \"IMPULSE HAIR GR\",
                \"amount\": -135.6,
                \"withdrawal\": 135.6,
                \"runningBalance\": 1042.1,
                \"category\": \"BEAUTY\",
                \"transactionId\": \"1f1815d7-911a-40ff-ac40-7fdb25b359ff\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-16\",
                \"description\": \"ROCK N MICKS HA\",
                \"amount\": -39.59,
                \"withdrawal\": 39.59,
                \"runningBalance\": 1177.7,
                \"transactionId\": \"ac3b176d-da4a-4d7e-80ef-5e1909e6caa9\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-16\",
                \"description\": \"METRO #240\",
                \"amount\": -21.19,
                \"withdrawal\": 21.19,
                \"runningBalance\": 1217.29,
                \"category\": \"GROCERY\",
                \"transactionId\": \"226f02bc-f70e-4437-936e-af4ec34f9443\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-16\",
                \"description\": \"BOLER MOUNTAIN\",
                \"amount\": -8.08,
                \"withdrawal\": 8.08,
                \"runningBalance\": 1238.48,
                \"transactionId\": \"60940b88-f083-4d35-9462-3a475c1cfad1\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-16\",
                \"description\": \"SARNIA SERVICE\",
                \"amount\": -6.09,
                \"withdrawal\": 6.09,
                \"runningBalance\": 1246.56,
                \"transactionId\": \"84432058-7ff2-496b-911e-1a6d5453ea8d\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-16\",
                \"description\": \"NON-TD ATM W/D\",
                \"amount\": -41.5,
                \"withdrawal\": 41.5,
                \"runningBalance\": 1252.65,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"d46f6a11-aeb1-4039-97ff-fef2894bd51d\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-16\",
                \"description\": \"BOLER MOUNTAIN\",
                \"amount\": -49.72,
                \"withdrawal\": 49.72,
                \"runningBalance\": 1294.15,
                \"transactionId\": \"45f8043b-87e7-4d06-b6ca-8e4765de08d2\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-16\",
                \"description\": \"FOOD BASICS #86 _F\",
                \"amount\": -39.89,
                \"withdrawal\": 39.89,
                \"runningBalance\": 1343.87,
                \"category\": \"GROCERY\",
                \"transactionId\": \"2a50bd17-7883-4978-83a3-003427854cd7\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-16\",
                \"description\": \"TIM HORTONS #23 _F\",
                \"amount\": -3.84,
                \"withdrawal\": 3.84,
                \"runningBalance\": 1383.76,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"de45c3a9-41c9-4a31-86a9-a0ce453c39be\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-16\",
                \"description\": \"TD ATM W/D xx4236\",
                \"amount\": -160,
                \"withdrawal\": 160,
                \"runningBalance\": 1387.6,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"316369ae-36e3-4a0f-83ec-0eb1935ef9ef\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-16\",
                \"description\": \"MUCHO BURRITO-S _F\",
                \"amount\": -19.1,
                \"withdrawal\": 19.1,
                \"runningBalance\": 1547.6,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"0a646844-5135-4f3a-ae1f-3474ff3a91d7\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-16\",
                \"description\": \"SARNIA SERVICE\",
                \"amount\": -60.5,
                \"withdrawal\": 60.5,
                \"runningBalance\": 1566.7,
                \"transactionId\": \"d58765f3-7721-4caf-ad4b-d43e9e1f7c1d\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-16\",
                \"description\": \"METRO #364 _F\",
                \"amount\": -9.01,
                \"withdrawal\": 9.01,
                \"runningBalance\": 1627.2,
                \"category\": \"GROCERY\",
                \"transactionId\": \"a4160abb-9abf-48a6-bac9-1bbfd1b2801c\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-12\",
                \"description\": \"View Cheque CHQ#xxxxx-xxxxxx6897 00186 **2346897\",
                \"amount\": -40,
                \"withdrawal\": 40,
                \"runningBalance\": 1640.01,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"a89e0774-b7ed-44f4-b0bd-fb5f39c7c571\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-12\",
                \"description\": \"View Cheque CHQ#xxxxx-xxxxxx6894 00184 **2346894\",
                \"amount\": -80,
                \"withdrawal\": 80,
                \"runningBalance\": 1681.91,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"818182c0-00e1-42ca-9785-b771e150a639\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-12\",
                \"description\": \"TIM HORTONS #23 _F\",
                \"amount\": -1.9,
                \"withdrawal\": 1.9,
                \"runningBalance\": 1680.01,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"d2cf4116-e22d-416d-a6bb-2563de58a23a\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-11\",
                \"description\": \"METRO #240\",
                \"amount\": -57.14,
                \"withdrawal\": 57.14,
                \"runningBalance\": 2040.7,
                \"category\": \"GROCERY\",
                \"transactionId\": \"3221ac16-8aaf-4b4b-937b-86500c2ce6b2\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-11\",
                \"description\": \"SCOTIA DEALER A APY\",
                \"amount\": -278.79,
                \"withdrawal\": 278.79,
                \"runningBalance\": 1761.91,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"ac02f56c-fe36-4015-9eb2-a6ba29d23889\"
            },
            {
                \"accountId\": \"4163ef9a-4181-4fdd-aa24-76fd2097c30c\",
                \"transactionDate\": \"2016-02-09\",
                \"description\": \"TDMASTERCARD X7H6Y6\",
                \"amount\": -155,
                \"withdrawal\": 155,
                \"runningBalance\": 0.95,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"af7a2a32-2db2-4efe-9ef6-adba8fb474ff\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-09\",
                \"description\": \"Telus Mobility/Mobilite X7H6Y9\",
                \"amount\": -100,
                \"withdrawal\": 100,
                \"runningBalance\": 2097.84,
                \"category\": \"UTILITIES_BILLS\",
                \"transactionId\": \"a1bfaa6b-ac0d-4262-b4ff-08cfc0f14029\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-08\",
                \"description\": \"Real Canadian Superstore MURPHY ROA\",
                \"amount\": -101.52,
                \"withdrawal\": 101.52,
                \"runningBalance\": 2197.84,
                \"category\": \"GROCERY\",
                \"transactionId\": \"42e5d5d2-21ff-46c7-825b-52333e960dd5\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-08\",
                \"description\": \"Fit4less MSP\",
                \"amount\": -9.9,
                \"withdrawal\": 9.9,
                \"runningBalance\": 2319.36,
                \"transactionId\": \"2cab99ea-141b-4339-9337-ac54c24972b8\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-08\",
                \"description\": \"PAYPAL PTE LTD MSP\",
                \"amount\": -20,
                \"withdrawal\": 20,
                \"runningBalance\": 2299.36,
                \"transactionId\": \"2d28c8cc-30f7-412f-9bf7-5b9ded07f9de\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-08\",
                \"description\": \"PIONEER STN #24\",
                \"amount\": -56.5,
                \"withdrawal\": 56.5,
                \"runningBalance\": 2409.26,
                \"category\": \"TRANSPORTATION\",
                \"transactionId\": \"541b9da2-b8d6-4c4f-ae22-6fe16fac3d4a\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-08\",
                \"description\": \"TD ATM W/D xx9117\",
                \"amount\": -40,
                \"withdrawal\": 40,
                \"runningBalance\": 2329.26,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"bd9081a1-fa71-4662-bc40-cf6a836f90ee\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-08\",
                \"description\": \"TD ATM W/D xx0246\",
                \"amount\": -40,
                \"withdrawal\": 40,
                \"runningBalance\": 2369.26,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"2b7b9ec4-e484-44f9-8bcd-6148d726469f\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-05\",
                \"description\": \"PAYPAL PTE LTD MSP\",
                \"amount\": -4.75,
                \"withdrawal\": 4.75,
                \"runningBalance\": 3105.76,
                \"transactionId\": \"08a78f45-c3c2-4d11-b902-abe44fe975cf\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-05\",
                \"description\": \"JOHNSON/UNIFUND INS\",
                \"amount\": -140,
                \"withdrawal\": 140,
                \"runningBalance\": 2965.76,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"4bb15431-6fef-4b9d-862f-318a7b5e2d0b\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-05\",
                \"description\": \"Transfer to Personal Payee DOMEMIC W6X7W8\",
                \"amount\": -500,
                \"withdrawal\": 500,
                \"runningBalance\": 2465.76,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"407dcb37-8ad3-4410-8f1b-b44b838c5595\"
            },
            {
                \"accountId\": \"4163ef9a-4181-4fdd-aa24-76fd2097c30c\",
                \"transactionDate\": \"2016-02-04\",
                \"description\": \"Simply Save from TD UNLIMITED CHEQUING ACCOUNT xxxxxxx6623\",
                \"amount\": 32,
                \"deposit\": 32,
                \"runningBalance\": 155.95,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"460b8d27-ec89-46e7-b244-1f103a0de269\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-04\",
                \"description\": \"MERIDIAN HAIR,\",
                \"amount\": -62.15,
                \"withdrawal\": 62.15,
                \"runningBalance\": 3110.51,
                \"category\": \"BEAUTY\",
                \"transactionId\": \"a0825012-65c2-43fb-948c-4404e964595a\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-04\",
                \"description\": \"CORP. OF THE CO PAY\",
                \"amount\": 1979.55,
                \"deposit\": 1979.55,
                \"runningBalance\": 3204.66,
                \"category\": \"INCOME\",
                \"transactionId\": \"47a8edee-c589-400c-91e0-19e3bc38ec5b\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-04\",
                \"description\": \"Simply Save to HIGH INTEREST TFSA SAVINGS ACCOUNT xxxxxxx8155\",
                \"amount\": -32,
                \"withdrawal\": 32,
                \"runningBalance\": 3172.66,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"80990dec-4400-4068-ab07-c939bbce54c9\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-03\",
                \"description\": \"PETSMART INC 20\",
                \"amount\": -76.61,
                \"withdrawal\": 76.61,
                \"runningBalance\": 1225.11,
                \"category\": \"PET\",
                \"transactionId\": \"843a3d27-758e-49aa-8711-40af295165ca\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-03\",
                \"description\": \"WAL-MART #3082\",
                \"amount\": -165.11,
                \"withdrawal\": 165.11,
                \"runningBalance\": 1301.72,
                \"category\": \"DEPARTMENT_STORE\",
                \"transactionId\": \"3258d9ac-d13b-4a9a-8b55-4b0fd86021b4\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-03\",
                \"description\": \"WALMART PORTRAI\",
                \"amount\": -19.84,
                \"withdrawal\": 19.84,
                \"runningBalance\": 1466.83,
                \"category\": \"DEPARTMENT_STORE\",
                \"transactionId\": \"1cffce29-ade6-4011-8cc0-83ef0d759fef\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-02\",
                \"description\": \"SHOPPERS DRUG M\",
                \"amount\": -24.01,
                \"withdrawal\": 24.01,
                \"runningBalance\": 1486.67,
                \"category\": \"PHARMACY\",
                \"transactionId\": \"71983736-0fe6-4fa7-a650-a354e79569b7\"
            },
            {
                \"accountId\": \"6408eb5b-e410-4b35-a549-f96d24c2df2a\",
                \"transactionDate\": \"2016-02-01\",
                \"description\": \"Pre-authorized Transfer from xxxxxxx6623\",
                \"amount\": 15,
                \"deposit\": 15,
                \"runningBalance\": 105.35,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"e2f2a143-3401-411e-973b-50ce2b291c74\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-01\",
                \"description\": \"CLA INSURANCE INS\",
                \"amount\": -16.88,
                \"withdrawal\": 16.88,
                \"runningBalance\": 1510.68,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"8fd6cd19-0e80-41d1-be8a-dd0730c780d6\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-01\",
                \"description\": \"PYT+INS: xxxxxxx5719\",
                \"amount\": -51.56,
                \"withdrawal\": 51.56,
                \"runningBalance\": 1527.56,
                \"transactionId\": \"752185ed-473d-4168-9502-50ffbb06335a\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-01\",
                \"description\": \"METRO #364 _F\",
                \"amount\": -12.39,
                \"withdrawal\": 12.39,
                \"runningBalance\": 2448.02,
                \"category\": \"GROCERY\",
                \"transactionId\": \"7359c511-996e-4988-aaa7-00df075d7784\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-01\",
                \"description\": \"Pre-authorized Transfer to xxxxxxx6640\",
                \"amount\": -15,
                \"withdrawal\": 15,
                \"runningBalance\": 2433.02,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"6b3b7564-3252-43cd-a9b6-bee952a3f9f9\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-01\",
                \"description\": \"UNDER WRAPS CAF\",
                \"amount\": -9.48,
                \"withdrawal\": 9.48,
                \"runningBalance\": 2423.54,
                \"transactionId\": \"f823ccd4-4195-4437-9204-fdf08df0ed46\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-01\",
                \"description\": \"METRO #364 _F\",
                \"amount\": -24.87,
                \"withdrawal\": 24.87,
                \"runningBalance\": 2398.67,
                \"category\": \"GROCERY\",
                \"transactionId\": \"d7f6a619-1550-47e0-82f7-674c4e46c8f7\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-01\",
                \"description\": \"TD ATM W/D xx5482\",
                \"amount\": -40,
                \"withdrawal\": 40,
                \"runningBalance\": 2358.67,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"d3426a0f-46ea-4360-8946-c98fc3296f4f\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-01\",
                \"description\": \"SHOPPERS DRUG M\",
                \"amount\": -11.62,
                \"withdrawal\": 11.62,
                \"runningBalance\": 2347.05,
                \"category\": \"PHARMACY\",
                \"transactionId\": \"8cb56c87-29b5-4192-9572-ec410f8b69a4\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-01\",
                \"description\": \"National Student Loan Services Centre MSP\",
                \"amount\": -483.36,
                \"withdrawal\": 483.36,
                \"runningBalance\": 1863.69,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"ff7fb774-dd4a-46fa-b74c-2dfad4a506ec\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-01\",
                \"description\": \"RBC FTD\",
                \"amount\": -210,
                \"withdrawal\": 210,
                \"runningBalance\": 1579.12,
                \"transactionId\": \"8dbe4adf-9ec2-4c5f-a597-4eaa299e8dd1\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-02-01\",
                \"description\": \"COGECO CABLE CA BPY\",
                \"amount\": -74.57,
                \"withdrawal\": 74.57,
                \"runningBalance\": 1789.12,
                \"category\": \"UTILITIES_BILLS\",
                \"transactionId\": \"ddf6d55f-73a4-4cc0-beb5-e1cc11daeac0\"
            },
            {
                \"accountId\": \"4163ef9a-4181-4fdd-aa24-76fd2097c30c\",
                \"transactionDate\": \"2016-01-29\",
                \"description\": \"BONUS INTEREST\",
                \"amount\": 0.05,
                \"deposit\": 0.05,
                \"runningBalance\": 123.95,
                \"category\": \"INCOME\",
                \"transactionId\": \"9ec2ab1e-9ec1-4d46-a244-a86e57eb5dae\"
            },
            {
                \"accountId\": \"4163ef9a-4181-4fdd-aa24-76fd2097c30c\",
                \"transactionDate\": \"2016-01-29\",
                \"description\": \"INTEREST CREDIT\",
                \"amount\": 0.04,
                \"deposit\": 0.04,
                \"runningBalance\": 123.9,
                \"category\": \"INCOME\",
                \"transactionId\": \"4d91e3f0-46aa-43a9-9a39-029f8a053e4d\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-29\",
                \"description\": \"OTHER BANK FEES\",
                \"amount\": -6,
                \"withdrawal\": 6,
                \"runningBalance\": 2460.41,
                \"category\": \"BANK_FEE\",
                \"transactionId\": \"1ed23874-6e85-4c7b-9d06-bf072a5de2f6\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-29\",
                \"description\": \"MONTHLY ACCOUNT FEE\",
                \"amount\": -14.95,
                \"withdrawal\": 14.95,
                \"runningBalance\": 2466.41,
                \"category\": \"BANK_FEE\",
                \"transactionId\": \"c230cd71-2263-4a1e-a717-76d90838a65b\"
            },
            {
                \"accountId\": \"c0f43f25-1b2e-453b-900b-4a7f6482d00a\",
                \"transactionDate\": \"2016-01-29\",
                \"description\": \"MONTHLY ACCOUNT FEE\",
                \"amount\": -4.95,
                \"withdrawal\": 4.95,
                \"runningBalance\": 114.74,
                \"category\": \"BANK_FEE\",
                \"transactionId\": \"532db6a4-b4ae-45ae-9042-79102ba5af3e\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-28\",
                \"description\": \"METRO #240\",
                \"amount\": -67.05,
                \"withdrawal\": 67.05,
                \"runningBalance\": 2760.15,
                \"category\": \"GROCERY\",
                \"transactionId\": \"c494051d-0263-4962-ba56-afe08adaffdb\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-28\",
                \"description\": \"SCOTIA DEALER A APY\",
                \"amount\": -278.79,
                \"withdrawal\": 278.79,
                \"runningBalance\": 2481.36,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"b97f9ef1-13f5-467c-9a28-07741db5c9b0\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-27\",
                \"description\": \"WAL-MART #3082\",
                \"amount\": -63.78,
                \"withdrawal\": 63.78,
                \"runningBalance\": 2827.2,
                \"category\": \"DEPARTMENT_STORE\",
                \"transactionId\": \"6fff1d80-9ca6-4500-8691-ee6f3aeedb98\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-27\",
                \"description\": \"WINNERS 218\",
                \"amount\": -162.76,
                \"withdrawal\": 162.76,
                \"runningBalance\": 2890.98,
                \"category\": \"DEPARTMENT_STORE\",
                \"transactionId\": \"918e0551-9e96-48a2-89e0-c2a6e334d64e\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-25\",
                \"description\": \"Real Canadian Superstore MURPHY ROA\",
                \"amount\": -128.63,
                \"withdrawal\": 128.63,
                \"runningBalance\": 3053.74,
                \"category\": \"GROCERY\",
                \"transactionId\": \"636c9b31-d159-46c9-ae85-ac08a8d606ba\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-25\",
                \"description\": \"Real Canadian Superstore MURPHY ROA _F\",
                \"amount\": -14.62,
                \"withdrawal\": 14.62,
                \"runningBalance\": 3437.6,
                \"category\": \"GROCERY\",
                \"transactionId\": \"8d7155fe-6bbc-443b-af5d-1e7267000cb9\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-25\",
                \"description\": \"Real Canadian Superstore MURPHY ROA _F\",
                \"amount\": -20.31,
                \"withdrawal\": 20.31,
                \"runningBalance\": 3417.29,
                \"category\": \"GROCERY\",
                \"transactionId\": \"62178ad7-84a4-4654-a27a-e8b5ebcf432e\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-25\",
                \"description\": \"METRO #364\",
                \"amount\": -55.02,
                \"withdrawal\": 55.02,
                \"runningBalance\": 3362.27,
                \"category\": \"GROCERY\",
                \"transactionId\": \"e1c0ec40-a681-4ce8-afed-a8d262bd52f3\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-25\",
                \"description\": \"Fit4less MSP\",
                \"amount\": -9.9,
                \"withdrawal\": 9.9,
                \"runningBalance\": 3352.37,
                \"transactionId\": \"0b1d670e-23ce-443b-aac7-171766f53c1f\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-25\",
                \"description\": \"View Cheque CHQ#xxxxx-xxxxxx3195 00183 **0363195\",
                \"amount\": -170,
                \"withdrawal\": 170,
                \"runningBalance\": 3182.37,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"bb01197f-a108-4824-a00f-f8cd1c6f4ae8\"
            },
            {
                \"accountId\": \"4163ef9a-4181-4fdd-aa24-76fd2097c30c\",
                \"transactionDate\": \"2016-01-21\",
                \"description\": \"Simply Save from TD UNLIMITED CHEQUING ACCOUNT xxxxxxx6623\",
                \"amount\": 36,
                \"deposit\": 36,
                \"runningBalance\": 123.86,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"d25d9166-42a4-47eb-a257-961c5810a90c\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-21\",
                \"description\": \"CORP. OF THE CO PAY\",
                \"amount\": 2493.85,
                \"deposit\": 2493.85,
                \"runningBalance\": 3488.22,
                \"category\": \"INCOME\",
                \"transactionId\": \"708fb969-fc93-494b-a1fb-f889bdb8e230\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-21\",
                \"description\": \"Simply Save to HIGH INTEREST TFSA SAVINGS ACCOUNT xxxxxxx8155\",
                \"amount\": -36,
                \"withdrawal\": 36,
                \"runningBalance\": 3452.22,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"99279f3b-7466-4535-bb6e-a03eb0a00d58\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-20\",
                \"description\": \"CANADA FED\",
                \"amount\": 160,
                \"deposit\": 160,
                \"runningBalance\": 1183.16,
                \"category\": \"TAXES_GOVERNMENT_BENEFITS\",
                \"transactionId\": \"680a2fa0-2c85-453a-a2c0-24135ece8e93\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-20\",
                \"description\": \"LUCKY CLARK (LO\",
                \"amount\": -51.59,
                \"withdrawal\": 51.59,
                \"runningBalance\": 1131.57,
                \"transactionId\": \"32f51385-970e-4d08-b278-b60cf82592b4\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-20\",
                \"description\": \"Real Canadian Superstore MURPHY ROA\",
                \"amount\": -137.2,
                \"withdrawal\": 137.2,
                \"runningBalance\": 994.37,
                \"category\": \"GROCERY\",
                \"transactionId\": \"2d614246-ad90-4dc5-a63e-60b7248354d2\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-18\",
                \"description\": \"FX ATM W/D FEE\",
                \"amount\": -5,
                \"withdrawal\": 5,
                \"runningBalance\": 1023.16,
                \"category\": \"BANK_FEE\",
                \"transactionId\": \"52fcdeca-72a9-45ad-88ec-6042e044fd04\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-18\",
                \"description\": \"FX ATM W/D _V\",
                \"amount\": -72.69,
                \"withdrawal\": 72.69,
                \"runningBalance\": 1028.16,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"ea40bb68-e404-4a37-ba8c-8cfff396a6bd\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-15\",
                \"description\": \"Sharkys MSP\",
                \"amount\": -37.29,
                \"withdrawal\": 37.29,
                \"runningBalance\": 1100.85,
                \"transactionId\": \"0e952021-b7a3-49e3-935d-2488d4bf0364\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-14\",
                \"description\": \"SCOTIA DEALER A APY\",
                \"amount\": -278.79,
                \"withdrawal\": 278.79,
                \"runningBalance\": 1138.14,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"5938e94e-d656-4b91-837b-09186e7bd85e\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-12\",
                \"description\": \"CAFE CALABRIA 4\",
                \"amount\": -7.89,
                \"withdrawal\": 7.89,
                \"runningBalance\": 1416.93,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"0ba548f3-55f3-4a84-bc96-844dcbc8436a\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-12\",
                \"description\": \"NON-TD ATM W/D\",
                \"amount\": -203,
                \"withdrawal\": 203,
                \"runningBalance\": 1424.82,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"1a2257f2-d54f-4e4e-9cd1-652342e18116\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-12\",
                \"description\": \"RELAY # 4982 _F\",
                \"amount\": -9.35,
                \"withdrawal\": 9.35,
                \"runningBalance\": 1627.82,
                \"category\": \"CONVENIENCE_STORE\",
                \"transactionId\": \"00069d76-6690-46a2-8341-5e90dfd42129\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-11\",
                \"description\": \"SARNIA SERVICE\",
                \"amount\": -67.01,
                \"withdrawal\": 67.01,
                \"runningBalance\": 1982.98,
                \"transactionId\": \"13b40b31-d0d2-4978-83a1-2ebe882d716b\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-11\",
                \"description\": \"COFFEE LODGE - _F\",
                \"amount\": -14.64,
                \"withdrawal\": 14.64,
                \"runningBalance\": 2202.21,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"3ec3b116-b5b9-4e83-839a-b7eb48631925\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-11\",
                \"description\": \"WINNERS 218\",
                \"amount\": -142.32,
                \"withdrawal\": 142.32,
                \"runningBalance\": 2059.89,
                \"category\": \"DEPARTMENT_STORE\",
                \"transactionId\": \"8d62ecfe-3105-4084-9354-db8d6faa3ae8\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-11\",
                \"description\": \"Fit4less MSP\",
                \"amount\": -9.9,
                \"withdrawal\": 9.9,
                \"runningBalance\": 2049.99,
                \"transactionId\": \"e2b56de5-3475-4569-a625-dc9fb6d4da1d\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-11\",
                \"description\": \"View Cheque CHQ#xxxxx-xxxxxx0583 00182 **0320583\",
                \"amount\": -50,
                \"withdrawal\": 50,
                \"runningBalance\": 1932.98,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"341ccafe-8e1c-4da8-9f9c-639b1cb9ff54\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-11\",
                \"description\": \"NON-TD ATM W/D\",
                \"amount\": -202,
                \"withdrawal\": 202,
                \"runningBalance\": 1637.17,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"1058eca5-b591-468c-bd9a-1e83b2f60bb5\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-11\",
                \"description\": \"WINNERS 218 _F\",
                \"amount\": -22.59,
                \"withdrawal\": 22.59,
                \"runningBalance\": 1839.17,
                \"category\": \"DEPARTMENT_STORE\",
                \"transactionId\": \"c7fdb81b-dcb0-4ef4-ae6c-e3a9c712e10c\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-11\",
                \"description\": \"PAYPAL PTE LTD MSP\",
                \"amount\": -71.22,
                \"withdrawal\": 71.22,
                \"runningBalance\": 1861.76,
                \"transactionId\": \"b77ea02d-f40d-4f4c-9212-bdb25599b729\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-11\",
                \"description\": \"WINNERS 218 _F\",
                \"amount\": 63.26,
                \"deposit\": 63.26,
                \"runningBalance\": 2382.72,
                \"transactionId\": \"56db8dd0-a4d6-4939-8a9f-e59cde55a86b\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-11\",
                \"description\": \"TIM HORTONS #02 _F\",
                \"amount\": -1.28,
                \"withdrawal\": 1.28,
                \"runningBalance\": 2381.44,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"c2a9c9b8-d032-4d8e-ba33-abfeffaa2809\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-11\",
                \"description\": \"Real Canadian Superstore MURPHY ROA _F\",
                \"amount\": -27.03,
                \"withdrawal\": 27.03,
                \"runningBalance\": 2354.41,
                \"category\": \"GROCERY\",
                \"transactionId\": \"b1c08961-77bd-4a0e-9662-ec8722caaf14\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-11\",
                \"description\": \"MERIDIAN HAIR,\",
                \"amount\": -61.5,
                \"withdrawal\": 61.5,
                \"runningBalance\": 2292.91,
                \"category\": \"BEAUTY\",
                \"transactionId\": \"e70fede3-5334-4382-b269-670551c7c6dc\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-11\",
                \"description\": \"SARNIA CHIROPRA\",
                \"amount\": -10,
                \"withdrawal\": 10,
                \"runningBalance\": 2282.91,
                \"transactionId\": \"96f1e546-490c-4c89-8a0e-d9ce4bc04f21\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-11\",
                \"description\": \"SHOPPERS DRUG M\",
                \"amount\": -66.06,
                \"withdrawal\": 66.06,
                \"runningBalance\": 2216.85,
                \"category\": \"PHARMACY\",
                \"transactionId\": \"842679c8-b63e-4760-b4d2-a6bf46aee8ee\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-08\",
                \"description\": \"Transfer to TD Credit Card JR101\",
                \"amount\": -250,
                \"withdrawal\": 250,
                \"runningBalance\": 3519.46,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"47535251-0cd8-41a0-8af3-09f41252e046\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-08\",
                \"description\": \"Transfer to BORDERLESS PLAN xxx0446 JR105\",
                \"amount\": -144.39,
                \"withdrawal\": 144.39,
                \"runningBalance\": 4275.77,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"960a33d4-285d-4a6e-89e3-dbad6ca6075b\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-08\",
                \"description\": \"Transfer to Personal Payee DOMEMIC Z9Q8X7\",
                \"amount\": -500,
                \"withdrawal\": 500,
                \"runningBalance\": 3775.77,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"4b9d637d-13b1-42f7-9a78-c1f2884fddae\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-08\",
                \"description\": \"METRO #364 _F\",
                \"amount\": -6.31,
                \"withdrawal\": 6.31,
                \"runningBalance\": 3769.46,
                \"category\": \"GROCERY\",
                \"transactionId\": \"6a45d785-73d9-4a59-a9fe-c6147d7178d2\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-08\",
                \"description\": \"President's Choice MasterCard Z9Q8X9\",
                \"amount\": -1000,
                \"withdrawal\": 1000,
                \"runningBalance\": 2519.46,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"306c194d-be84-430c-b0c5-6db4d31e42b2\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-08\",
                \"description\": \"SCOTIA VISA Z9Q8Y3\",
                \"amount\": -100,
                \"withdrawal\": 100,
                \"runningBalance\": 2419.46,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"269cfe91-eef7-433f-b4df-0c1649296f2a\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-08\",
                \"description\": \"Telus Mobility/Mobilite Z9Q8X8\",
                \"amount\": -100,
                \"withdrawal\": 100,
                \"runningBalance\": 2319.46,
                \"category\": \"UTILITIES_BILLS\",
                \"transactionId\": \"7d1246f4-34dd-42ae-b4eb-b6f947371779\"
            },
            {
                \"accountId\": \"c0f43f25-1b2e-453b-900b-4a7f6482d00a\",
                \"transactionDate\": \"2016-01-08\",
                \"description\": \"Transfer from TD UNLIMITED CHEQUING ACCOUNT xxx6623 JR105\",
                \"amount\": 100,
                \"deposit\": 100,
                \"runningBalance\": 119.69,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"d0b4f83b-62f8-469f-bd46-a3fb08135eb5\"
            },
            {
                \"accountId\": \"4163ef9a-4181-4fdd-aa24-76fd2097c30c\",
                \"transactionDate\": \"2016-01-07\",
                \"description\": \"Simply Save from TD UNLIMITED CHEQUING ACCOUNT xxxxxxx6623\",
                \"amount\": 42,
                \"deposit\": 42,
                \"runningBalance\": 87.86,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"82006f85-25a2-463a-a4d1-90c06fe338d5\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-07\",
                \"description\": \"Simply Save to HIGH INTEREST TFSA SAVINGS ACCOUNT xxxxxxx8155\",
                \"amount\": -42,
                \"withdrawal\": 42,
                \"runningBalance\": 4471.01,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"f0d965cb-b2ff-454e-879e-13805e0a02a3\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-07\",
                \"description\": \"CORP. OF THE CO PAY\",
                \"amount\": 3358.07,
                \"deposit\": 3358.07,
                \"runningBalance\": 4513.01,
                \"category\": \"INCOME\",
                \"transactionId\": \"4a5e6e24-f23e-4856-ada0-08cc30c9f7f8\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-07\",
                \"description\": \"KOKOMO'S\",
                \"amount\": -50.85,
                \"withdrawal\": 50.85,
                \"runningBalance\": 4420.16,
                \"transactionId\": \"f70b7bc9-97df-4339-a727-cb07581eedfb\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-05\",
                \"description\": \"NON-TD ATM W/D\",
                \"amount\": -41,
                \"withdrawal\": 41,
                \"runningBalance\": 1302.93,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"370e51ff-9551-4eb3-b128-a3f447b21db6\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-05\",
                \"description\": \"JOHNSON/UNIFUND INS\",
                \"amount\": -140,
                \"withdrawal\": 140,
                \"runningBalance\": 1154.94,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"fda6d0df-31e5-4d7c-a583-a4e028f6d19e\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-05\",
                \"description\": \"SCROGGIE'S GRIL\",
                \"amount\": -42.21,
                \"withdrawal\": 42.21,
                \"runningBalance\": 1360.73,
                \"transactionId\": \"665c0754-00e0-4c73-8a2a-71e2cdf03aa3\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-05\",
                \"description\": \"KOKOMO'S\",
                \"amount\": -16.8,
                \"withdrawal\": 16.8,
                \"runningBalance\": 1343.93,
                \"transactionId\": \"eac0ce85-8568-4fa8-8a01-5b172d54f27f\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-05\",
                \"description\": \"PAYPAL PTE LTD MSP\",
                \"amount\": -7.99,
                \"withdrawal\": 7.99,
                \"runningBalance\": 1294.94,
                \"transactionId\": \"18805d7f-2315-4a52-be5d-25331e593560\"
            },
            {
                \"accountId\": \"6408eb5b-e410-4b35-a549-f96d24c2df2a\",
                \"transactionDate\": \"2016-01-04\",
                \"description\": \"Pre-authorized Transfer from xxxxxxx6623\",
                \"amount\": 15,
                \"deposit\": 15,
                \"runningBalance\": 90.35,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"96774906-435c-4778-b071-3551675afd70\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-04\",
                \"description\": \"Real Canadian Superstore MURPHY ROA _F\",
                \"amount\": -11.35,
                \"withdrawal\": 11.35,
                \"runningBalance\": 2461.77,
                \"category\": \"GROCERY\",
                \"transactionId\": \"4097eee4-3078-4a32-8ab8-ac82000a581a\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-04\",
                \"description\": \"Real Canadian Superstore MURPHY ROA\",
                \"amount\": -191.7,
                \"withdrawal\": 191.7,
                \"runningBalance\": 2270.07,
                \"category\": \"GROCERY\",
                \"transactionId\": \"dc43ed3d-8334-4f32-a106-513e6b2687c6\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-04\",
                \"description\": \"Pre-authorized Transfer to xxxxxxx6640\",
                \"amount\": -15,
                \"withdrawal\": 15,
                \"runningBalance\": 2255.07,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"eb962726-f443-4bcf-a7df-26ef5f82b1ca\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-04\",
                \"description\": \"PYT+INS: xxxxxxx5719\",
                \"amount\": -51.78,
                \"withdrawal\": 51.78,
                \"runningBalance\": 1402.94,
                \"transactionId\": \"6811ff49-aec1-4f12-8f50-248146842125\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-04\",
                \"description\": \"Transfer to Personal Payee DOMEMIC Y2Z4A7\",
                \"amount\": -400,
                \"withdrawal\": 400,
                \"runningBalance\": 1855.07,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"9c0c527f-2cfa-4d2e-b8e4-e4510a5ae4cf\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-04\",
                \"description\": \"NON-TD ATM W/D\",
                \"amount\": -61.5,
                \"withdrawal\": 61.5,
                \"runningBalance\": 1793.57,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"37b2a1ab-b649-484f-b6e2-f777083166f6\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-04\",
                \"description\": \"COGECO CABLE CA BPY\",
                \"amount\": -60.91,
                \"withdrawal\": 60.91,
                \"runningBalance\": 1732.66,
                \"category\": \"UTILITIES_BILLS\",
                \"transactionId\": \"99d8fcc2-d311-4221-9130-de31fa3a7732\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-04\",
                \"description\": \"CLA INSURANCE INS\",
                \"amount\": -16.88,
                \"withdrawal\": 16.88,
                \"runningBalance\": 1715.78,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"b60dff73-0893-4f03-b069-3164b38d2161\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-04\",
                \"description\": \"RBC FTD\",
                \"amount\": -210,
                \"withdrawal\": 210,
                \"runningBalance\": 1505.78,
                \"transactionId\": \"476fc351-0fb4-4d07-8398-04a902291f37\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2016-01-04\",
                \"description\": \"Real Canadian Superstore MURPHY ROA\",
                \"amount\": -51.06,
                \"withdrawal\": 51.06,
                \"runningBalance\": 1454.72,
                \"category\": \"GROCERY\",
                \"transactionId\": \"757fa0f8-5568-4f8e-8a19-f3fd2ed1e601\"
            },
            {
                \"accountId\": \"4163ef9a-4181-4fdd-aa24-76fd2097c30c\",
                \"transactionDate\": \"2015-12-31\",
                \"description\": \"INTEREST CREDIT\",
                \"amount\": 0.06,
                \"deposit\": 0.06,
                \"runningBalance\": 45.86,
                \"category\": \"INCOME\",
                \"transactionId\": \"5b77a00a-01b9-4cb4-adab-74425273888c\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-31\",
                \"description\": \"Real Canadian Superstore MURPHY ROA _F\",
                \"amount\": -32.34,
                \"withdrawal\": 32.34,
                \"runningBalance\": 3316.96,
                \"category\": \"GROCERY\",
                \"transactionId\": \"875c8a17-8fc0-4b88-84a3-8fa2cada4049\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-31\",
                \"description\": \"SCOTIA DEALER A APY\",
                \"amount\": -278.79,
                \"withdrawal\": 278.79,
                \"runningBalance\": 3038.17,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"f9635a70-962d-4199-8546-3fea651558ae\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-31\",
                \"description\": \"SOUTH SARNIA VE\",
                \"amount\": -60.74,
                \"withdrawal\": 60.74,
                \"runningBalance\": 2977.43,
                \"transactionId\": \"06b17475-8031-493e-9213-8432f16f523e\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-31\",
                \"description\": \"MONTHLY ACCOUNT FEE\",
                \"amount\": -14.95,
                \"withdrawal\": 14.95,
                \"runningBalance\": 2962.48,
                \"category\": \"BANK_FEE\",
                \"transactionId\": \"a0ab8fc6-2aba-4d72-9ce1-9d551fce1096\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-31\",
                \"description\": \"OTHER BANK FEES\",
                \"amount\": -6,
                \"withdrawal\": 6,
                \"runningBalance\": 2956.48,
                \"category\": \"BANK_FEE\",
                \"transactionId\": \"91129113-65c4-4917-b58e-c91c9f983ae0\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-31\",
                \"description\": \"National Student Loan Services Centre MSP\",
                \"amount\": -483.36,
                \"withdrawal\": 483.36,
                \"runningBalance\": 2473.12,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"efd99e69-ced6-4288-af7b-a695f384b8e1\"
            },
            {
                \"accountId\": \"c0f43f25-1b2e-453b-900b-4a7f6482d00a\",
                \"transactionDate\": \"2015-12-31\",
                \"description\": \"MONTHLY ACCOUNT FEE\",
                \"amount\": -4.95,
                \"withdrawal\": 4.95,
                \"runningBalance\": 19.69,
                \"category\": \"BANK_FEE\",
                \"transactionId\": \"3ef55601-e9eb-475c-8a44-040190d6300b\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-30\",
                \"description\": \"SUN LIFE MSP\",
                \"amount\": 400,
                \"deposit\": 400,
                \"runningBalance\": 3665.45,
                \"transactionId\": \"3f29a642-36bb-4196-9087-d3b0c302c83e\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-30\",
                \"description\": \"STARBUCKS #4772 _F\",
                \"amount\": -6.95,
                \"withdrawal\": 6.95,
                \"runningBalance\": 3658.5,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"5616c800-99c7-4c03-b675-c14226440f76\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-30\",
                \"description\": \"Real Canadian Superstore MURPHY ROA\",
                \"amount\": -149.82,
                \"withdrawal\": 149.82,
                \"runningBalance\": 3508.68,
                \"category\": \"GROCERY\",
                \"transactionId\": \"13150885-bc77-4bb9-8be6-5e152f8a39fc\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-30\",
                \"description\": \"SCROGGIE'S GRIL\",
                \"amount\": -63,
                \"withdrawal\": 63,
                \"runningBalance\": 3445.68,
                \"transactionId\": \"71bc5475-8c58-4419-8ddd-fe480bdfd39f\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-30\",
                \"description\": \"PAYPAL PTE LTD MSP\",
                \"amount\": -8.09,
                \"withdrawal\": 8.09,
                \"runningBalance\": 3437.59,
                \"transactionId\": \"21ee2752-785e-487a-9aea-87c1e3279ae8\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-30\",
                \"description\": \"PAYPAL PTE LTD MSP\",
                \"amount\": -28.24,
                \"withdrawal\": 28.24,
                \"runningBalance\": 3409.35,
                \"transactionId\": \"974ee448-3769-47e3-8c84-e911d5354d44\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-30\",
                \"description\": \"ZEHRS GAS BAR #\",
                \"amount\": -53.5,
                \"withdrawal\": 53.5,
                \"runningBalance\": 3355.85,
                \"category\": \"TRANSPORTATION\",
                \"transactionId\": \"c4817b00-dcbc-48fe-a13e-8c73a7737e20\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-30\",
                \"description\": \"TIM HORTONS #09 _F\",
                \"amount\": -6.55,
                \"withdrawal\": 6.55,
                \"runningBalance\": 3349.3,
                \"category\": \"RESTAURANT\",
                \"transactionId\": \"227057e1-2e84-470f-9212-50cc0a467fc4\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-29\",
                \"description\": \"DYNAMITE # 152\",
                \"amount\": -54.44,
                \"withdrawal\": 54.44,
                \"runningBalance\": 3373.37,
                \"transactionId\": \"1774c6dc-aff4-49b0-898a-b95004fd0119\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-29\",
                \"description\": \"PIONEER STN #24\",
                \"amount\": -65.15,
                \"withdrawal\": 65.15,
                \"runningBalance\": 3308.22,
                \"category\": \"TRANSPORTATION\",
                \"transactionId\": \"3ca84cdc-073b-4365-932a-5fa01092e8b2\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-29\",
                \"description\": \"BATH &amp; BODY WOR\",
                \"amount\": -23.73,
                \"withdrawal\": 23.73,
                \"runningBalance\": 3265.45,
                \"category\": \"BEAUTY\",
                \"transactionId\": \"e86f7ed6-22c5-4859-9e71-47cee4132f94\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-29\",
                \"description\": \"Fit4less MSP\",
                \"amount\": -9.9,
                \"withdrawal\": 9.9,
                \"runningBalance\": 3289.18,
                \"transactionId\": \"213544d2-3f19-45b0-a974-f926ceb925b8\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-29\",
                \"description\": \"CINEPLEX #7138\",
                \"amount\": -9.14,
                \"withdrawal\": 9.14,
                \"runningBalance\": 3299.08,
                \"category\": \"ENTERTAINMENT\",
                \"transactionId\": \"6d166ed0-a229-45d0-9cd7-5c239e7d908d\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-29\",
                \"description\": \"FARM BOY #93 _F\",
                \"amount\": -14.39,
                \"withdrawal\": 14.39,
                \"runningBalance\": 3427.81,
                \"transactionId\": \"db6ddd4b-c4b9-4a69-81b4-74a704299798\"
            },
            {
                \"accountId\": \"4163ef9a-4181-4fdd-aa24-76fd2097c30c\",
                \"transactionDate\": \"2015-12-24\",
                \"description\": \"Simply Save from TD UNLIMITED CHEQUING ACCOUNT xxxxxxx6623\",
                \"amount\": 44,
                \"deposit\": 44,
                \"runningBalance\": 45.8,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"cfda3cc1-3037-4164-96d9-e13dc8318e4e\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-24\",
                \"description\": \"Fit4less MSP\",
                \"amount\": -5.22,
                \"withdrawal\": 5.22,
                \"runningBalance\": 3464.2,
                \"transactionId\": \"2e47ab10-0e6a-4f60-9553-2c48743e3ea2\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-24\",
                \"description\": \"THE CHARLES DIC\",
                \"amount\": -22,
                \"withdrawal\": 22,
                \"runningBalance\": 3442.2,
                \"transactionId\": \"efbffab0-19c2-46f7-ab91-faed2714c9f3\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-24\",
                \"description\": \"Simply Save to HIGH INTEREST TFSA SAVINGS ACCOUNT xxxxxxx8155\",
                \"amount\": -44,
                \"withdrawal\": 44,
                \"runningBalance\": 3556.51,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"bc88cf57-c9db-41f1-89cb-d8a03818eec1\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-24\",
                \"description\": \"WAL-MART #3120\",
                \"amount\": -87.09,
                \"withdrawal\": 87.09,
                \"runningBalance\": 3469.42,
                \"category\": \"DEPARTMENT_STORE\",
                \"transactionId\": \"443b2582-b835-4364-8a69-b416c565e245\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-24\",
                \"description\": \"CORP. OF THE CO PAY\",
                \"amount\": 2124.59,
                \"deposit\": 2124.59,
                \"runningBalance\": 3600.51,
                \"category\": \"INCOME\",
                \"transactionId\": \"40bccd3c-df87-4b78-baf6-c1cf9c0cb323\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-23\",
                \"description\": \"Real Canadian Superstore MURPHY ROA\",
                \"amount\": -63.48,
                \"withdrawal\": 63.48,
                \"runningBalance\": 1475.92,
                \"category\": \"GROCERY\",
                \"transactionId\": \"f1217188-c94d-4aff-9c27-c79c1e53f437\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-23\",
                \"description\": \"ALDI x7050 10.57_V\",
                \"amount\": -15.13,
                \"withdrawal\": 15.13,
                \"runningBalance\": 1539.4,
                \"transactionId\": \"b72f9d19-e892-46f3-91bc-e1e13ebe9631\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-22\",
                \"description\": \"Real Canadian Superstore MURPHY ROA\",
                \"amount\": -35.61,
                \"withdrawal\": 35.61,
                \"runningBalance\": 1569.53,
                \"category\": \"GROCERY\",
                \"transactionId\": \"4dcdd0c3-95b6-4f8e-91ea-fb50bb022631\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-22\",
                \"description\": \"PAYPAL PTE LTD MSP\",
                \"amount\": -15,
                \"withdrawal\": 15,
                \"runningBalance\": 1554.53,
                \"transactionId\": \"fcfb0d94-2916-4a6a-a0fd-4f3fd975e22a\"
            },
            {
                \"accountId\": \"c0f43f25-1b2e-453b-900b-4a7f6482d00a\",
                \"transactionDate\": \"2015-12-22\",
                \"description\": \"Payment to TD Credit Card\",
                \"amount\": -100,
                \"withdrawal\": 100,
                \"runningBalance\": 24.64,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"d6bac073-c8ca-41d2-ad1d-9a60599f4278\"
            },
            {
                \"accountId\": \"4163ef9a-4181-4fdd-aa24-76fd2097c30c\",
                \"transactionDate\": \"2015-12-21\",
                \"description\": \"Transfer to BORDERLESS PLAN xxx0446 RG190\",
                \"amount\": -142.25,
                \"withdrawal\": 142.25,
                \"runningBalance\": 1.8,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"f3eaa733-1b1b-41f2-9456-110f8d53b2f5\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-21\",
                \"description\": \"Telus Mobility/Mobilite U3Q4Y9\",
                \"amount\": -100,
                \"withdrawal\": 100,
                \"runningBalance\": 1605.14,
                \"category\": \"UTILITIES_BILLS\",
                \"transactionId\": \"d8dae0d3-6075-48f4-b7d8-de0e9a3863df\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-21\",
                \"description\": \"View Cheque CHQ#xxxxx-xxxxxx4601 00181 **0254601\",
                \"amount\": -200,
                \"withdrawal\": 200,
                \"runningBalance\": 1705.14,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"7cb50f5f-9462-4934-94dc-2bd4274c94b1\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-21\",
                \"description\": \"Real Canadian Superstore MURPHY ROA\",
                \"amount\": -76.32,
                \"withdrawal\": 76.32,
                \"runningBalance\": 1905.14,
                \"category\": \"GROCERY\",
                \"transactionId\": \"fba69522-5bc1-473f-99d1-1bc46b2418df\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-21\",
                \"description\": \"BULK BARN FOODS _F\",
                \"amount\": -43.6,
                \"withdrawal\": 43.6,
                \"runningBalance\": 1981.46,
                \"category\": \"GROCERY\",
                \"transactionId\": \"2c16fce1-86b8-4302-87b0-7d862a67e123\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-21\",
                \"description\": \"President's Choice MasterCard U3Q4Y8\",
                \"amount\": -500,
                \"withdrawal\": 500,
                \"runningBalance\": 2025.06,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"6e548306-f5b1-4800-ae3f-5917e694b110\"
            },
            {
                \"accountId\": \"9c6afa54-0301-4df6-a1ad-b965b9abf325\",
                \"transactionDate\": \"2015-12-21\",
                \"description\": \"Transfer to TD Credit Card RG200\",
                \"amount\": -100,
                \"withdrawal\": 100,
                \"runningBalance\": 2525.06,
                \"category\": \"FINANCIAL_PRODUCT\",
                \"transactionId\": \"3619fbf9-062d-4ff4-84fb-ceafe06eb9dd\"
            },
            {
                \"accountId\": \"c0f43f25-1b2e-453b-900b-4a7f6482d00a\",
                \"transactionDate\": \"2015-12-21\",
                \"description\": \"Transfer from HIGH INTEREST TFSA SAVINGS ACCOUNT xxx8155 RG190\",
                \"amount\": 100,
                \"deposit\": 100,
                \"runningBalance\": 124.64,
                \"category\": \"TRANSFER\",
                \"transactionId\": \"15e1a6ee-0e23-40a4-9100-65cb0972aa95\"
            }
        ]
    },
    \"categories\": [
        \"ACCOMMODATIONS\",
        \"BANK_FEE\",
        \"BEAUTY\",
        \"CHARITY\",
        \"CHILDREN\",
        \"CLOTHING\",
        \"CONVENIENCE_STORE\",
        \"DEPARTMENT_STORE\",
        \"EDUCATION\",
        \"ELECTRONICS\",
        \"ENTERTAINMENT\",
        \"FINANCIAL_PRODUCT\",
        \"FITNESS\",
        \"GIFTS\",
        \"GROCERY\",
        \"HEALTH\",
        \"HOME\",
        \"INCOME\",
        \"PET\",
        \"PHARMACY\",
        \"RESTAURANT\",
        \"TAXES_GOVERNMENT_BENEFITS\",
        \"THRIFT_SHOP\",
        \"TRANSFER\",
        \"TRANSPORTATION\",
        \"UTILITIES_BILLS\"
    ]
}"));
});