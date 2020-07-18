<?php

public function store(CreateCoupon $request)
{
    $this->createCouponService->make($request);

    return back()->with(['success' => 'Congratulations!']);
}
