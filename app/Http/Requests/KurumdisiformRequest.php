<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KurumdisiformRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

                'groupName'=>'required',
                'groupLabel'=>'required',
                'groupAdress'=>'required',
                'groupWebsite'=>'required',
                'groupCountry'=>'required',
                'foundedYear'=>'required',
                'foundationType'=>'required',
                'groupTaxBranch'=>'required',
                'groupTaxNo'=>'required',
                'groupSicilNo'=>'required',
                'groupSGKNo'=>'required',
                'paidCapital'=>'required',
                'biggestShareName'=>'required',
                'biggestSharePerc'=>'required',
                'foreignPartner'=>'required',
                'lastEndorsement'=>'required',
                'nextEndorsement'=>'required',
                'lastInvoice'=>'required',
                'lastYearRevenue'=>'required',
                'needInvestment'=>'required',
                'biggestForeignSharePerc'=>'required',
                'groupContactName'=>'required',
                'groupContactLastName'=>'required',
                'groupContactPhone'=>'required',
                'groupContactEmail'=>'required',
                'groupOtherCount'=>'required',
                'competence1Count'=>'required',
                'groupFixedChair'=>'required',
                'competence2Count'=>'required',
                'competence3Count'=>'required',
                'competence4Count'=>'required',
                'competence5Count'=>'required',
                'competence6Count'=>'required',
                'competence7Count'=>'required',
                'competence8Count'=>'required',
                'competence9Count'=>'required',
                'competence10Count'=>'required',
                'productCount'=>'required',
                'teknoloji'=>'required',        /// Formda Teknolojinizi nasıl tanımlarsınız?
                'sector'=>'required',
                'targetGroupSummary'=>'required',
                'targetSector'=>'required',
                'targetAltSector'=>'required',
                'competitorWebsites'=>'required',
                'competitorDifference'=>'required',
                'businessModel2'=>'required',
                'haveInvestment'=>'required',
                'havePatent'=>'required',
                'lawApply'=>'required',
                'wantAddress'=>'required',
        ];
    }
}
