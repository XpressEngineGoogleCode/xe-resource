<?php
    /**
     * @file   zh-TW.lang.php
     * @author zero (zero@nzeo.com) 翻譯：royallin
     * @brief  資源 (resource) 模組正體中文語言
     **/

    $lang->resource_manager = '資源';
    $lang->about_resource_manager = '可進行資源管理的模組';

    $lang->order_newest = "最新登錄";
    $lang->order_latest = "最近更新";
    $lang->order_popular = "熱門";
    $lang->package_status = '登錄狀態';

    $lang->download = '檔案下載';
    $lang->package_downloaded_count = '下載次數';
    $lang->downloaded_count = '下載';
    $lang->voted_count = '推薦';
    $lang->resource_estimate = '評論';
    $lang->star_point = '評分';
    $lang->cmd_estimate = '送出評論';
    $lang->msg_already_voted = '已經評過分了';

    $lang->cmd_list_my_package = '檔案列表';
    $lang->about_my_package = '등록 신청을 한 자료들의 목록 중 상태가 "등록" 인것이 신청 완료가 된 것입니다.<br/>신청 완료가 된 자료에는 직접 배포를 하실 수 있습니다.';

    $lang->package_accepted = '通過';
    $lang->package_waiting = '等待';
    $lang->package_reservation = '保留';

    $lang->cmd_attach_file = '登錄檔案';
    $lang->package_author = '作者';

    $lang->cmd_view_all_version = '檢視所有版本';
    $lang->version_history = '版本紀錄';
    $lang->latest_version = '最新版本';
    $lang->selected_version = '選擇版本';

    $lang->attach_version = '版本';
    $lang->about_attach_version = '請輸入版本。<br/>版本通常是以英文或數字來區分更新的程度。';
    $lang->latest_attach_version = '最新版本';

    $lang->attach_file = '附加檔案';
    $lang->about_attach_file = '請選擇要上傳的相關檔案。<br/> 建議使用 zip、tgz、tar 等已壓縮的檔案。'; 

    $lang->attach_description = '檔案說明';
    $lang->about_attach_description = '請輸入檔案的相關說明。';

    $lang->no_packages = '目前沒有檔案登錄。<br/>申請通過的檔案會登錄於此。'; 

    $lang->package_version = '版本';

    $lang->search_dependency = '搜尋連動檔案';
    $lang->attach_dependency = '連動檔案';
    $lang->about_attach_dependency = '업로드 하시는 자료에 필수적이거나 혹은 같이 다운로드 받아야 하는 자료가 있으면 입력해주세요.<br/>파일을 다운로드 받을때 같이 다운로드 받을 수 있도록 안내됩니다.';

    $lang->attach_screenshot = '螢幕截圖';
    $lang->about_attach_screenshot = '請上傳螢幕截圖。<br/> 圖片大小是 100x100 的常見大小。<br/> 請使用 jpg、gif、png 等圖片格式。'; 

    $lang->cmd_manage_file = '檔案管理';
    $lang->about_manage_file = '승인된 자료에 대해 직접 파일을 업로드 하실 수 있습니다.<br/>파일 업로드시 다른 자료와의 연동등도 꼭 자세히 입력하여 주시면 다운로드 받는 사용자들이 보다 편하게 사용할 수 있습니다.<br/>파일 첨부 및 관리는 직접 관리하실 수 있습니다';

    $lang->cmd_manage_package = '管理登錄檔案';
    $lang->about_manage_package = '審核用戶登錄的檔案是否通過/保留/刪除。';

    $lang->cmd_insert_package = '檔案登錄';
    $lang->about_insert_package= '在登錄檔案前必須要先通過審核。<br/>資料審核的情況下可先登錄檔案。<br/>자료 신청이 접수되면 해당 자료로 파일을 등록하실 수 있습니다.<br/>자료 신청을 별도로 요청 받는 이유는 자료의 업그레이드시에 버전 관리와 연동(다른 모듈 또는 위젯등과의 연계)을 검토하기 위해서입니다.<br/>아래 내용을 입력하신후 등록 버튼을 선택하시면 신청이 됩니다.';

    $lang->cmd_modify_package = '編輯檔案';
    $lang->about_modify_package ='可編輯檔案標題、使用條款、首頁與說明。'; 

    $lang->cmd_delete_package = '刪除檔案';
    $lang->about_delete_package= '會連同檔案登錄時所附加的檔案一起刪除。';

    $lang->about_required_field = '表示為<em>必須輸入</em>的項目。';
    $lang->required_field = '此項目必須輸入。';

    $lang->package_regdate = '登錄日期';
    $lang->package_update = '最後更新日期';

    $lang->package_category = '分類';
    $lang->about_package_category = '請選擇分類。';

    $lang->package_title = '檔案標題';
    $lang->about_package_title = '請輸入檔案標題。';

    $lang->package_path = '安裝路徑';
    $lang->about_package_path = '請直接輸入安裝位置，例)./modules/模組名稱。';

    $lang->package_license = '使用條款';
    $lang->about_package_license = '請選擇檔案的使用條款。<br/>選擇其他條款的話，請簡單輸入說明。';

    $lang->package_homepage = '首頁';
    $lang->about_package_homepage = '請輸入作者的網站和 project 的網址。';

    $lang->package_description = '簡介';
    $lang->about_package_description = '請輸入簡介。<br/>瀏覽檔案時會顯示。<br/> 請輸入 300 個字以內。';

    $lang->resource_notify_mail = '郵件通知';
    $lang->about_resource_notify_mail = '當有檔案登錄或修改時將會用郵件通知。';

    $lang->resource_use_path = '경로 정보 사용';
    $lang->about_resource_use_path = '사용해제 하시면 경로 정보를 받지 않도록 할 수 있습니다';

    $lang->resource_new_notify_title = '檔案登錄請求';
    $lang->resource_modify_notify_title = '檔案資料變更';
    $lang->resource_delete_notify_title = '已刪除檔案';
    $lang->resource_attach_notify_title = '附檔已被新增到檔案中';
    $lang->resource_status_changed = '登錄的檔案狀態變更';
    $lang->resource_status_changed_message = '[title] 的檔案狀態變更成 [status]';
?>
