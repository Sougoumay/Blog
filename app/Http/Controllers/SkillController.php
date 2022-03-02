<?php

namespace App\Http\Controllers;

use App\Http\Requests\AcademicRequest;
use App\Http\Requests\HobbyRequest;
use App\Http\Requests\LanguageRequest;
use App\Http\Requests\SoftwareRequest;
use App\Models\Academic;
use App\Models\Hobby;
use App\Models\Language;
use App\Models\Software;
use Illuminate\Http\Request;

class SkillController extends Controller
{

    function getAddAcademicBackgroundForm()
    {
        return view('academicBackground.addAcademicBackgroundForm');
    }

    function addAcademicBackground(AcademicRequest $academicRequest)
    {
        Academic::create([
            'start_date'=>$academicRequest->get('start_date'),
            'end_date'=>$academicRequest->get('end_date'),
            'institute'=>$academicRequest->get('institute'),
            'country'=>$academicRequest->get('country'),
            'city'=>$academicRequest->get('city'),
            'user_id'=>1
        ]);

        return back();
    }

    function getEditAcademicBackgroundForm($id)
    {
        $academic = Academic::find($id);
        return view('academicBackground.editAcademicBackgroundForm', compact('academic'));
    }

    function editAcademicBackground(AcademicRequest $academicRequest, $id)
    {
        Academic::find($id)->update([
            'end_date'=>$academicRequest->get('end_date')
        ]);

        return back();
    }

    function getAddLanguageForm()
    {
        return view('languages.addLanguageForm');
    }

    function addLanguage(LanguageRequest $languageRequest)
    {
        Language::create([
            'langue'=>$languageRequest->get('langue'),
            'level'=>$languageRequest->get('level'),
            'user_id'=>1
        ]);

        return back();
    }

    function getEditLanguageForm($id)
    {
        $language = Language::find($id);
        return view('languages.editLanguageForm', compact('language'));
    }

    function editLanguage(LanguageRequest $languageRequest, $id)
    {
        Language::find($id)->update([
            'level'=>$languageRequest->get('level')
        ]);

        return back();
    }

    function getAddHobbyForm()
    {
        return view('hobbies.addHobbiesForm');
    }

    function addHobby(HobbyRequest $hobbyRequest)
    {
        Hobby::create([
            'title'=>$hobbyRequest->get('title'),
            'user_id'=>1
        ]);

        return back();
    }

    function deleteHobby($id)
    {
        Hobby::find($id)->softDeletes();

        return back();
    }

    function getAddSoftwareForm()
    {
        return view('software.addSoftwareForm');
    }

    function addSoftware(SoftwareRequest $softwareRequest)
    {
        Software::create([
            'title'=>$softwareRequest->get('title'),
            'user_id'=>1
        ]);

        return back();
    }
}
